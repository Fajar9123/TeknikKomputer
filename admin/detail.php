<?php
// Start the session
session_start();

// Connect to the database
$server = "localhost";
$user = "root";
$password = ""; // Change to your database password if necessary
$nama_database = "multi_user";

// Attempt to connect to the database
$db = mysqli_connect($server, $user, $password, $nama_database);

// Check the connection
if (!$db) {
    die("Failed to connect to database: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
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
    $kode_pos = isset($_POST['kode_pos']) ? mysqli_real_escape_string($db, $_POST['kode_pos']) : '';
    $email_kantor = mysqli_real_escape_string($db, $_POST['email_kantor']);
    $fax_kantor = mysqli_real_escape_string($db, $_POST['fax_kantor']);

    // Query to insert data into the peserta table
    $query = "INSERT INTO peserta (nama_lengkap, no_ktp_nik_paspor, tempat_lahir, tanggal_lahir, jenis_kelamin, kebangsaan, alamat_rumah, email, kualifikasi_pendidikan, nama_institusi, jabatan, alamat_kantor, kode_pos, email_kantor, fax_kantor) 
              VALUES ('$nama_lengkap', '$no_ktp_nik_paspor', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$kebangsaan', '$alamat_rumah', '$email', '$kualifikasi_pendidikan', '$nama_institusi', '$jabatan', '$alamat_kantor', '$kode_pos', '$email_kantor', '$fax_kantor')";

    // Check if the query was successful
    if (mysqli_query($db, $query)) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
}

// Retrieve all participants
$query = "SELECT * FROM peserta";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard LSP - FR.APL.02</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container-fluid {
            margin-top: 20px;
        }
        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center; /* Centering the title */
        }
        .section-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-align: center; /* Centering the section title */
        }
        .table {
            margin: 0 auto; /* Centering the table */
        }
        .table thead th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
        }
        .table td {
            vertical-align: middle;
            text-align: center; /* Center align text in table cells */
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: scale(1.05);
        }
        footer {
            background-color: #343a40;
            color: white;
        }
        footer a {
            color: #007bff;
        }
        footer a:hover {
            color: #0056b3;
        }
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }
            .btn {
                padding: 10px;
                font-size: 1rem;
            }
            .table td {
                white-space: normal;
            }
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.html">Admin TEKOM</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="data_assessors.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                            Data Asesor
                        </a>
                        <a class="nav-link" href="peserta.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Data Peserta Terdaftar
                        </a>
                        <a class="nav-link" href="logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin TEKOM
                </div>
            </nav>
        </div>

       <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Peserta - FR.APL.02. ASESMEN MANDIRI</h1>
            <div class="section-title">Skema Sertifikasi: PEMELIHARAAN DAN PERBAIKAN KOMPUTER</div>
            <p><strong>Nomor Judul:</strong> SKM/0382/00010/3/2019</p>
            <div class="mb-4"></div>

            <div class="row">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='col-md-12 mb-4'>";  
                        echo "<div class='card' style='width: 100%;'>";  
                        echo "<div class='card-body row'>";

                        // Left side - Main details (wider column)
                        echo "<div class='col-md-6 mb-3'>"; 
                        echo "<h5 class='card-title'>{$row['nama_lengkap']}</h5>";
                        echo "<p class='card-text'><strong>No. KTP/NIK/Paspor:</strong> {$row['no_ktp_nik_paspor']}</p>";
                        echo "<p class='card-text'><strong>Tempat Lahir:</strong> {$row['tempat_lahir']}</p>";
                        echo "<p class='card-text'><strong>Tanggal Lahir:</strong> {$row['tanggal_lahir']}</p>";
                        echo "<p class='card-text'><strong>Jenis Kelamin:</strong> {$row['jenis_kelamin']}</p>";
                        echo "<p class='card-text'><strong>Kebangsaan:</strong> {$row['kebangsaan']}</p>";
                        echo "<p class='card-text'><strong>Alamat Rumah:</strong> {$row['alamat_rumah']}</p>";
                        echo "<p class='card-text'><strong>Email:</strong> {$row['email']}</p>";
                        echo "<p class='card-text'><strong>Kualifikasi Pendidikan:</strong> {$row['kualifikasi_pendidikan']}</p>";
                        echo "<p class='card-text'><strong>Institusi:</strong> {$row['nama_institusi']}</p>";
                        echo "<p class='card-text'><strong>Jabatan:</strong> {$row['jabatan']}</p>";
                        echo "<p class='card-text'><strong>Alamat Kantor:</strong> {$row['alamat_kantor']}</p>";
                        echo "<p class='card-text'><strong>Kode Pos:</strong> {$row['kode_pos']}</p>";
                        echo "<p class='card-text'><strong>Fax Kantor:</strong> {$row['fax_kantor']}</p>";
                        echo "</div>"; // Close col-md-6 (left side)

                        // Right side - Form (wider column)
                        echo "<div class='col-md-6 mb-3'>";  
                        echo "<div class='card'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>Form Pengiriman</h5>";

                        // Form - Email, Description, and Kirim Button
                        echo "<form action='#' method='POST'>";
                        echo "<div class='mb-3'>";
                        echo "<label for='email' class='form-label'>Email</label>";
                        echo "<input type='email' class='form-control' id='email' name='email' placeholder='Enter your email' required>";
                        echo "</div>";
                        echo "<div class='mb-3'>";
                        echo "<label for='description' class='form-label'>Deskripsi</label>";
                        echo "<textarea class='form-control' id='description' name='description' rows='3' placeholder='Tulis deskripsi...'></textarea>";
                        echo "</div>";
                        echo "<div class='mb-3'>";
                        echo "<label for='file' class='form-label'>Upload File (PDF)</label>";
                        echo "<input type='file' class='form-control' id='file' name='file' accept='.pdf' required>";
                        echo "</div>";
                        
                        echo "<button type='submit' class='btn btn-primary'>Kirim</button>";
                        echo "</form>";
                        echo "</form>";

                        echo "</div>"; // Close card-body
                        echo "</div>"; // Close card
                        echo "</div>"; // Close col-md-6
                        
                        echo "</div>"; // Close card-body
                        echo "</div>"; // Close card
                        echo "</div>"; // Close col-md-12
                        $no++;
                    }
                } else {
                    echo "<p class='col-12'>Tidak ada data peserta</p>";
                }
                ?>
            </div> <!-- Close row -->
        </div> <!-- Close container-fluid -->
    </main>
</div>

</div>

                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2024</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/simple-datatables.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($db);
?>
