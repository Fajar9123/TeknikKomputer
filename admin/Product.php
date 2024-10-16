<?php
include "koneksi.php";

if ($_GET['act'] == "tambah") {

    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $foto = $_FILES['thumbnail']['name'];

    $dir = 'img/';
    $tmpFile = $_FILES['thumbnail']['tmp_name'];
    
    move_uploaded_file($tmpFile, $dir.$foto);
    //die();

    $query_sql = "INSERT INTO tabel(product,kategori,harga,thumbnail) VALUES('$product','$kategori','$kategori','$harga','$thumbnail')";
    $sql = mysqli_query($conn, $query_sql);
    if($sql){
        echo "<script>alert('Add Product Success!')
        window.location.href:'tables.php' </script>";
    } else {
        $_SESSION['gagal'] = "Buku gagal ditambahkan !";
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
} elseif ($_GET['act'] == "edit") {
    $kode_product = $_POST['product'];
    $judul_buku = $_POST['judul_buku'];
    $kategori_buku = $_POST['kategori_buku'];
    $genre_buku = $_POST['genre_buku'];
    $penerbit_buku = $_POST['penerbit_buku'];
    $deskripsi_buku = $_POST['deskripsi_buku'];
    $stok = $_POST['stok'];
    $foto_buku = ''; // Inisialisasi nama file foto buku

    // Cek apakah ada file foto baru yang diunggah
    if (!empty($_FILES['foto_buku']['name'])) {
        $foto_buku = $_FILES['foto_buku']['name'];

        // Proses upload foto baru
        $dir = '../../img/buku/';
        $tmpFile = $_FILES['foto_buku']['tmp_name'];
        move_uploaded_file($tmpFile, $dir.$foto_buku);
    } else {
        // Jika tidak ada file foto baru yang diunggah, gunakan foto yang sudah ada sebelumnya
        $querySelectFoto = "SELECT foto_buku FROM buku WHERE kode_buku = '$kode_buku'";
        $resultSelectFoto = mysqli_query($conn, $querySelectFoto);
        $rowSelectFoto = mysqli_fetch_assoc($resultSelectFoto);
        $foto_buku = $rowSelectFoto['foto_buku'];
    }
    // var_dump($_FILES);

    // die();

    // Buat query SQL untuk memperbarui data buku
    $query = "UPDATE buku SET judul_buku = '$judul_buku', kategori_buku = '$kategori_buku', ";
    $query .= "genre_buku = '$genre_buku', penerbit_buku = '$penerbit_buku', deskripsi_buku = '$deskripsi_buku', ";
    $query .= "stok = '$stok', foto_buku = '$foto_buku' ";
    $query .= "WHERE kode_buku = '$kode_buku'";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
        $_SESSION['berhasil'] = "Buku berhasil diedit !";
        header("location: " . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['gagal'] = "Buku gagal diedit !";
        header("location: " . $_SERVER['HTTP_REFERER']);
    }



} elseif ($_GET['act'] == "hapus") {
    $kode_buku = $_GET['id']; 

    // Ambil nama file foto terkait buku
    $querySelectFoto = "SELECT foto_buku FROM buku WHERE kode_buku = '$kode_buku'";
    $resultSelectFoto = mysqli_query($conn, $querySelectFoto);
    $rowSelectFoto = mysqli_fetch_assoc($resultSelectFoto);
    $foto_buku = $rowSelectFoto['foto_buku'];

    // Hapus file foto jika ada
    if (!empty($foto_buku)) {
        $path_to_file = '../../img/buku/' . $foto_buku;
        if (file_exists($path_to_file)) {
            unlink($path_to_file); // Hapus file foto dari direktori
        }
    }

    // Hapus entri buku dari database
    $sql = mysqli_query($conn, "DELETE FROM buku WHERE id_buku = '$kode_buku'");

    if ($sql) {
        $_SESSION['berhasil'] = "Buku berhasil dihapus!";
        header("location: " . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['gagal'] = "Buku gagal dihapus!";
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
}

