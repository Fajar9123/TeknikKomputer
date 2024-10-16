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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Poppins:wght@300;400;600&family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa; /* Light background color */
    }
    .kotak_login {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .tulisan_login {
      text-align: center;
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 20px;
      color: #007bff; /* Primary color */
    }
    .form_login {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ced4da;
      border-radius: 4px;
    }
    .tombol_login {
      width: 100%;
      padding: 10px;
      background: #007bff; /* Primary button color */
      border: none;
      border-radius: 4px;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }
    .tombol_login:hover {
      background: #0056b3; /* Darker shade on hover */
    }
    .link {
      color: #007bff;
      text-decoration: none;
    }
    .link:hover {
      text-decoration: underline;
    }
    .alert {
      color: red; /* Alert text color */
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">TEKOM</h1>
      </a>
      <nav id="navmenu" class="navmenu" style="line-height: 50px;">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="login.php" class="active">Login</a></li>
          <li><a href="daftar.php">Pendaftaran Uji Kompetensi</a></li>
          <li><a href="#portfolio">Profile</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Login Uji Kompetensi</li>
          </ol>
        </nav>
        <h1>Login</h1>
      </div>
    </div>

    <?php 
    if(isset($_GET['pesan'])){
      if($_GET['pesan']=="gagal"){
        echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
      }
    }
    ?>

    <div class="kotak_login">
      <p class="tulisan_login">Silahkan login</p>
      <form action="cek_login.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="form_login" placeholder="Username .." required="required">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form_login" placeholder="Password .." required="required">
        <input type="submit" class="tombol_login" value="LOGIN">
        <br />
        <br />
        <center>
          <a class="link" href="index.html">kembali</a>
        </center>
      </form>
    </div>
  </main>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

 
<footer id="footer" class="footer">
  <div class="container footer-top">
    <div class="row gy-4">
      <!-- Tentang TEKOM -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="d-flex align-items-center">
          <span class="sitename">TEKOM - Sertifikasi Profesi</span>
        </a>
        <div class="footer-contact pt-3">
          <p>LSP merupakan lembaga yang berfungsi untuk memastikan kompetensi tenaga kerja melalui proses sertifikasi
            yang terpercaya dan diakui secara nasional maupun internasional.</p>
          <p>LSP bertujuan untuk meningkatkan kualitas sumber daya manusia dengan memastikan setiap individu memiliki
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
          <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang tekom</a></li>
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
 
</body>
</html>