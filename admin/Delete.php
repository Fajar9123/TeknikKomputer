<?php
include "koneksi.php";


$id = $_GET['id'];

// Ambil nama file foto terkait buku
$querySelectFoto = "SELECT thumbnail FROM product WHERE id = '$id'";
$resultSelectFoto = mysqli_query($conn, $querySelectFoto);
$rowSelectFoto = mysqli_fetch_assoc($resultSelectFoto);
$thumbnail = $rowSelectFoto['thumbnail'];

// Hapus file foto jika ada
if (!empty($thumbnail)) {
    $path_to_file = 'img/' . $thumbnail;
    if (file_exists($path_to_file)) {
        unlink($path_to_file); // Hapus file foto dari direktori
    }
}

// Hapus entri buku dari database
$sql = mysqli_query($conn, "DELETE FROM product WHERE id = '$id'");

if ($sql) {
    echo "<script>
        alert('Delete Product Success!');
        window.location.href='tables.php';
      </script>";
} else {
    echo "<script>
                alert('Delete Product Failed!');
                window.location.href='tables.php';
              </script>";
}
