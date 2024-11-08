<?php
$server = "localhost";
$user = "root";
$password = ""; // Ganti dengan password database Anda jika ada
$nama_database = "multi_user";

// Mencoba untuk menghubungkan ke database
$db = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa apakah koneksi berhasil
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama_lengkap = mysqli_real_escape_string($db, $_POST['nama_lengkap']);
    $no_ktp_nik_paspor = mysqli_real_escape_string($db, $_POST['no_ktp_nik_paspor']);
    $tempat_lahir = mysqli_real_escape_string($db, $_POST['tempat_lahir']);
    $tanggal_lahir = mysqli_real_escape_string($db, $_POST['tanggal_lahir']);
    $jenis_kelamin = mysqli_real_escape_string($db, $_POST['jenis_kelamin']);
    $kebangsaan = mysqli_real_escape_string($db, $_POST['kebangsaan']);
    $alamat_rumah = mysqli_real_escape_string($db, $_POST['alamat_rumah']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $kualifikasi_pendidikan = mysqli_real_escape_string($db, $_POST['kualifikasi_pendidikan']);
    $nama_institusi = mysqli_real_escape_string($db, $_POST['nama_institusi']);
    $jabatan = mysqli_real_escape_string($db, $_POST['jabatan']);
    $alamat_kantor = mysqli_real_escape_string($db, $_POST['alamat_kantor']);
    $kode_pos = isset($_POST['kode_pos']) ? mysqli_real_escape_string($db, $_POST['kode_pos']) : ''; // Check if kode_pos exists
    $email_kantor = mysqli_real_escape_string($db, $_POST['email_kantor']);
    $fax_kantor = mysqli_real_escape_string($db, $_POST['fax_kantor']);

    // Query untuk memasukkan data ke tabel peserta
    $query = "INSERT INTO peserta (nama_lengkap, no_ktp_nik_paspor, tempat_lahir, tanggal_lahir, jenis_kelamin, kebangsaan, alamat_rumah, email, kualifikasi_pendidikan, nama_institusi, jabatan, alamat_kantor, kode_pos, email_kantor, fax_kantor) 
              VALUES ('$nama_lengkap', '$no_ktp_nik_paspor', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$kebangsaan', '$alamat_rumah', '$email', '$kualifikasi_pendidikan', '$nama_institusi', '$jabatan', '$alamat_kantor', '$kode_pos', '$email_kantor', '$fax_kantor')";
// Memeriksa apakah query berhasil
if (mysqli_query($db, $query)) {
    // Mengarahkan ke halaman daftar.php setelah berhasil
    header("Location: daftar.php");
    exit;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
}

// Menutup koneksi
mysqli_close($db);
?>