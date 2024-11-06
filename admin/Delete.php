<?php
$server = "localhost";
$user = "root";
$password = ""; 
$nama_database = "multi_user";

// Mencoba untuk menghubungkan ke database
$db = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa apakah koneksi berhasil
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// Memeriksa apakah parameter 'id' ada di URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($db, $_GET['id']);

    // Query untuk menghapus data peserta berdasarkan ID
    $query = "DELETE FROM peserta WHERE id = '$id'";

    // Memeriksa apakah query berhasil
    if (mysqli_query($db, $query)) {
        
        header("Location: peserta.php"); 
        exit(); 
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

// Menutup koneksi
mysqli_close($db);
?>
