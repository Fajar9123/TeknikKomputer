<?php
$servername = "localhost"; // Your server name or IP address
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "multi_user"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Teknik Komputer</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="img/tekom.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">TEKOM</h1>
      </a>

      <nav id="navmenu" class="navmenu" style="line-height: 50px;"> <!-- Match the line-height with logo height -->
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="daftar.html" class="active">Pendaftaran Uji Kompetensi</a></li>
          <li><a href="#portfolio">Profile</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Pendaftaran Uji Kompetensi</li>
          </ol>
        </nav>
        <h1>Pendaftaran</h1>
      </div>
    </div><!-- End Page Title -->

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>TEKOM Registration</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TEKOM Registration</title>

        <style>
          body {
            background-color: #f0f4f8;
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
          }

          .container {
            background-color: #fff;
            padding: 40px;
          }

          h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
          }

          .section-title {
            background-color: #0056b3;
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 25px;
            font-size: 18px;
            font-weight: 600;
          }

          .form-group label {
            font-weight: 600;
            color: #333;
          }

          .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
          }

          .form-control:focus {
            border-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.3);
          }

          .btn-primary {
            background-color: #0056b3;
            border-color: #0056b3;
            width: 100%;
            padding: 12px;
            font-size: 18px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
          }

          .btn-primary:hover {
            background-color: #004494;
            box-shadow: 0 0 10px rgba(0, 86, 179, 0.2);
          }

          .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
          }

          .form-group {
            margin-bottom: 20px;
          }

          @media (max-width: 768px) {
            .form-row {
              flex-direction: column;
            }
          }

          p {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
          }

          h5 {
            margin-bottom: 15px;
            font-size: 18px;
            font-weight: 600;
            color: #333;
          }

          .main-color {
            background-color: #004494;
            color: white;
          }
        </style>
      </head>

    <body>
      <main class="main">
        <div class="container" id="form-container">
          <h2>FR.APL.01. PERMOHONAN SERTIFIKASI KOMPETENSI</h2>
          <div class="section-title">Bagian 1: Rincian Data Pemohon Sertifikasi</div>
          <p>Pada bagian ini, cantumkan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.
          </p>

          <form id="form-step1">
            <h5>a. Data Pribadi</h5>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="full-name">Nama Lengkap</label>
                <input type="text" class="form-control" id="full-name" placeholder="Masukkan Nama Lengkap" required>
              </div>
              <div class="form-group col-md-6">
                <label for="id-number">No. KTP/NIK/Paspor</label>
                <input type="text" class="form-control" id="id-number" placeholder="Masukkan No. KTP/NIK/Paspor"
                  required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="birth-place">Tempat Lahir</label>
                <input type="text" class="form-control" id="birth-place" placeholder="Masukkan Tempat Lahir" required>
              </div>
              <div class="form-group col-md-6">
                <label for="birth-date">Tanggal Lahir</label>
                <input type="date" class="form-control" id="birth-date" placeholder="Masukkan Tempat Lahir" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="gender">Jenis Kelamin</label>
                <select id="gender" class="form-control" required>
                  <option selected disabled>Pilih...</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="nationality">Kebangsaan</label>
                <select id="nationality" class="form-control" required>
                  <option selected disabled>Pilih...</option>
                  <option>WNI</option>
                  <option>WNA</option>
                  <option>Lainnya</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="address">Alamat Rumah</label>
              <textarea class="form-control" id="address" placeholder="Masukkan Alamat Rumah" required></textarea>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="phone">No. Telepon</label>
                <input type="tel" class="form-control" id="phone" placeholder="Masukkan No. Telepon" required>
              </div>
              <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" required>
              </div>
            </div>
            
            <div class="form-group">
              <label for="education">Kualifikasi Pendidikan</label>
              <input type="text" class="form-control" id="education" placeholder="Masukkan Kualifikasi Pendidikan"
                required>
            </div>

            <h5 class="mt-5">b. Data Pekerjaan Sekarang</h5>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="company">Nama Institusi / Perusahaan</label>
                <input type="text" class="form-control" id="company" placeholder="Masukkan Nama Institusi / Perusahaan"
                  required>
              </div>
              <div class="form-group col-md-6">
                <label for="position">Jabatan</label>
                <input type="text" class="form-control" id="position" placeholder="Masukkan Jabatan" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="office-address">Alamat Kantor</label>
                <textarea class="form-control" id="office-address" placeholder="Masukkan Alamat Kantor"
                  required></textarea>
              </div>
              <div class="form-group col-md-4">
                <label for="office-zip">Kode Pos</label>
                <input type="text" class="form-control" id="office-zip" placeholder="Masukkan Kode Pos" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="office-email">Email</label>
                <input type="email" class="form-control" id="office-email" placeholder="Masukkan Email" required>
              </div>
              <div class="form-group col-md-3">
                <label for="office-telepon">No. Telepon</label>
                <input type="tel" class="form-control" id="office-telepon" placeholder="Masukkan No. Telepon" required>
              </div>
              <div class="form-group col-md-3">
                <label for="office-fax">Fax</label>
                <input type="tel" class="form-control" id="office-fax" placeholder="Masukkan Fax " required>
              </div>
            </div>

            <p class="text-muted">* Pastikan semua informasi yang diisi adalah benar.</p>
            <button type="button" class="btn-primary my-5" onclick="loadNextForm()">Selanjutnya</button>
          </form>
        </div>
      </main>

      <script>
        // JavaScript to load the next form
        function loadNextForm() {
          const formContainer = document.getElementById('form-container');
          formContainer.innerHTML = `
             <h2>FR.APL.02. ASESMEN MANDIRI</h2>
          <div class="section-title">Skema Sertifikasi: PEMELIHARAAN DAN PERBAIKAN KOMPUTER</div>
          <p><strong>Nomor Judul:</strong> SKM/0382/00010/3/2019/15</p>
          <p><strong>PANDUAN ASESMEN MANDIRI:</strong><br>
          <ul>
            <li>Baca setiap pertanyaan di kolom sebelah kiri.</li>
            <li>Pilih salah satu opsi (K = Kompeten atau BK = Belum Kompeten) jika Anda yakin dapat melakukan tugas yang
              dijelaskan</li>
          </ul>
          </p>

          <form id="form-step2">
            <p><strong>Unit Kompetensi : Mengidentifikasi Perangkat Penyusun Komputer</p>
            <p><strong>Kode Unit : J.620900.001.02</p>

            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="table-primary">
                  <tr>
                    <th colspan="2" class="text-center">Dapatkah Saya?</th>
                    <th class="text-center">K</th>
                    <th class="text-center">BK</th>
                    <th class="text-center">Bukti</th>
                  </tr>
                </thead>
                <tbody class="fw-normal">
                  <tr>
                    <td>Elemen 1</td>
                    <td>Mempersiapkan Perangkat Penyusun Komputer</td>
                    <td>
                      <input type="radio" name="task1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task1-1" value="no"> BK
                    </td>
                    <td rowspan="5">Mengacu APL01</br>(Bagian 3 No.1)</td>
                  </tr>
                  <tr>
                    <td colspan="4">Kriteria Unjuk Kerja:</td>
                  </tr>
                  <tr>
                    <td>1.1</td>
                    <td>Menyiapkan tempat perangkat penyusun komputer dalam keadaan kering, bersih, dan aman</td>
                    <td>
                      <input type="radio" name="task1-1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task1-1-1" value="no"> BK
                    </td>
                  </tr>
                  <tr>
                    <td>1.2</td>
                    <td>Menyiapkan perlengkapan untuk penyusun komputer</td>
                    <td>
                      <input type="radio" name="task1-2" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task1-2" value="no"> BK
                    </td>
                  </tr>
                  <tr>
                    <td>1.3</td>
                    <td>Menyiapkan perangkat penyusun komputer dan buku manual</td>
                    <td>
                      <input type="radio" name="task1-2" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task1-2" value="no"> BK
                    </td>
                  </tr>
                  <tr class="elemen-table">
                    <td>Elemen 2</td>
                    <td>Mengidentifikasi Perangkat Penyusun Komputer</td>
                    <td>
                      <input type="radio" name="task2-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task2-1" value="no"> BK
                    </td>
                    <td rowspan="5">Mengacu APL01</br>(Bagian 3 No.1)</td>
                  </tr>
                  <tr>
                    <td colspan="4">Kriteria Unjuk Kerja:</td>
                  </tr>
                  <tr>
                    <td>2.1</td>
                    <td>Memahami buku manual perangkat penyusun komputer</td>
                    <td>
                      <input type="radio" name="task2-1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task2-1-1" value="no"> BK
                    </td>
                  </tr>
                  <tr>
                    <td>2.2</td>
                    <td>Mendaftar perangkat penyusun komputer sesuai spesifikasi</td>
                    <td>
                      <input type="radio" name="task2-1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task2-1-1" value="no"> BK
                    </td>
                  </tr>
                  <tr>
                    <td>2.3</td>
                    <td>Mengelompokkan perangkat penyusun komputer sesuai daftar</td>
                    <td>
                      <input type="radio" name="task2-1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task2-1-1" value="no"> BK
                    </td>
                  </tr>
                  <tr class="elemen-table">
                    <td>Elemen 3</td>
                    <td>Memeriksa Hasil Identifikasi Perangkat Penyusun Komputer</td>
                    <td>
                      <input type="radio" name="task3-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task3-1" value="no"> BK
                    </td>
                    <td rowspan="4">Mengacu APL01</br>(Bagian 3 No.1)</td>
                  </tr>
                  <tr>
                    <td colspan="4">Kriteria Unjuk Kerja:</td>
                  </tr>
                  <tr>
                    <td>3.1</td>
                    <td>Mengidentifikasi perangkat penyusun komputer sesuai hasil identifikasi</td>
                    <td>
                      <input type="radio" name="task3-1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task3-1-1" value="no"> BK
                    </td>
                  </tr>
                  <tr>
                    <td>3.2</td>
                    <td>Meletakkan perangkat penyusun komputer pada tempat yang kering, bersih, aman</td>
                    <td>
                      <input type="radio" name="task3-1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task3-1-1" value="no"> BK
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <p><strong>Unit Kompetensi : Mengidentifikasi Spesifikasi Perangkat Komputer</p>
            <p><strong>Kode Unit : J.620900.002.02</p>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="table-primary">
                  <tr>
                    <th colspan="2" class="text-center">Dapatkah Saya?</th>
                    <th class="text-center">K</th>
                    <th class="text-center">BK</th>
                    <th class="text-center">Bukti</th>
                  </tr>
                </thead>
                <tbody class="fw-normal">
                  <tr>
                    <td>Elemen 1</td>
                    <td>Mengidentifikasi Spesifikasi Perangkat Komputer</td>
                    <td>
                      <input type="radio" name="task1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task1-1" value="no"> BK
                    </td>
                    <td rowspan="4">Mengacu APL01</br>(Bagian 3 No.1)</td>
                  </tr>
                  <tr>
                    <td colspan="4">Kriteria Unjuk Kerja:</td>
                  </tr>
                  <tr>
                    <td>1.1</td>
                    <td>Menelusuri sumber informasi agar keabsahan informasi pengetahuan dasar komunikasi sesuai dengan
                      kebutuhan</td>
                    <td>
                      <input type="radio" name="task1-1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task1-1-1" value="no"> BK
                    </td>
                  </tr>
                  <tr>
                    <td>1.2</td>
                    <td>Menunjukan materi informasi secara sistematis sesuai dengan proses komunikasi</td>
                    <td>
                      <input type="radio" name="task1-2" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task1-2" value="no"> BK
                    </td>
                  </tr>
                  <tr class="elemen-table">
                    <td>Elemen 2</td>
                    <td>Mengidentifikasi Spesifikasi Perangkat Komputer</td>
                    <td>
                      <input type="radio" name="task2-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task2-1" value="no"> BK
                    </td>
                    <td rowspan="4">Mengacu APL01</br>(Bagian 3 No.1)</td>
                  </tr>
                  <tr>
                    <td colspan="4">Kriteria Unjuk Kerja:</td>
                  </tr>
                  <tr>
                    <td>2.1</td>
                    <td>Membaca buku manual beberapa komputer</td>
                    <td>
                      <input type="radio" name="task2-1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task2-1-1" value="no"> BK
                    </td>
                  </tr>
                  <tr>
                    <td>2.2</td>
                    <td>Mempelajari beberapa keunggulan dan kekurangan beberapa perangkat komputer</td>
                    <td>
                      <input type="radio" name="task2-1-1" value="yes" required> K
                    </td>
                    <td>
                      <input type="radio" name="task2-1-1" value="no"> BK
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <input type="checkbox" id="confirm-checkbox">
            <label for="confirm-checkbox" class="fw-medium">Pastikan Anda sudah mengisi semua dengan benar</label>
            <button type="submit" class="btn-primary my-5" id="submit-button" disabled>Kirim</button>
          </form>
                  `;
          // Mengaktifkan atau menonaktifkan tombol kirim berdasarkan checkbox
          const checkbox = document.getElementById('confirm-checkbox');
          const submitButton = document.getElementById('submit-button');

          checkbox.addEventListener('change', function () {
            submitButton.disabled = !this.checked; // Aktifkan tombol jika checkbox dicentang
          });
        }
      </script>
    </body>

</html>
</main>
</body>
<script>
  document.getElementById('form-step1').addEventListener('submit', function (event) {
    event.preventDefault();
    window.location.href = 'p02.html'; // Ganti ke halaman p02.html
  });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>


<footer id="footer" class="footer">
  <div class="container footer-top">
    <div class="row gy-4">
      <!-- Tentang TEKOM -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="d-flex align-items-center">
          <span class="sitename">TEKOM - Lembaga Sertifikasi Profesi</span>
        </a>
        <div class="footer-contact pt-3">
          <p>TEKOM merupakan lembaga yang berfungsi untuk memastikan kompetensi tenaga kerja melalui proses sertifikasi
            yang terpercaya dan diakui secara nasional maupun internasional.</p>
          <p>TEKOM bertujuan untuk meningkatkan kualitas sumber daya manusia dengan memastikan setiap individu memiliki
            keterampilan sesuai dengan standar profesi yang berlaku.</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+62 12345 67890</span></p>
          <p><strong>Email:</strong> <span>info@tekom-example.com</span></p>
        </div>
      </div>

      <!-- Link Berguna -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang TEKOM</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Layanan Kami</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Kontak</a></li>
        </ul>
      </div>

      <!-- Layanan Kami -->
      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Layanan Kami</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Sertifikasi Kompetensi</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Pelatihan Profesional</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Pengembangan Kurikulum</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Konsultasi SDM</a></li>
        </ul>
      </div>

      <!-- Ikuti Kami -->
      <div class="col-lg-4 col-md-12">
        <h4>Follow Us</h4>
        <p>Ikuti perkembangan terbaru tentang TEKOM dan berbagai inisiatif kami dalam pengembangan sumber daya manusia dan
          kompetensi profesional.</p>
        <div class="social-links d-flex">
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">TEKOM</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      Designed by <a href="">TEKOM</a>
    </div>
  </div>
</footer>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>