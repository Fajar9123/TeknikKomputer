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

        /* Reduced font size for titles */
        h1 {
            font-size: 1.25rem; /* Change this value to make it smaller or larger */
            font-weight: bold;
        }

        .section-title {
            font-size: 1.2rem; /* Change this value for skema sertifikasi title */
            font-weight: bold;
            margin-bottom: 1rem;
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
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
            width: 100%; /* Make button full width on mobile */
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

        /* Mobile specific styles */
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }

            .btn {
                padding: 10px; /* More padding for touch screens */
                font-size: 1rem; /* Larger font for better readability */
            }

            .table td {
                white-space: normal; /* Allow text wrapping */
            }
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="index.html">Admin LSP</a>
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
                        <a class="nav-link" href="peserta_terdaftar.php">
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
                    Admin LSP
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Peserta - FR.APL.02. ASESMEN MANDIRI</h1>
                    <div class="section-title">Skema Sertifikasi: PEMELIHARAAN DAN PERBAIKAN KOMPUTER</div>
                    <p><strong>Nomor Judul:</strong> SKM/0382/00010/3/2019/15</p>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Peserta</th>
                                    <th>Email</th>
                                    <th>Nomor HP</th>
                                    <th>Skema Sertifikasi</th>
                                    <th>Nomor Judul</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Andi Santoso</td>
                                    <td>andi@example.com</td>
                                    <td>08123456789</td>
                                    <td>PEMELIHARAAN DAN PERBAIKAN KOMPUTER</td>
                                    <td>SKM/0382/00010/3/2019/15</td>
                                    <td>
                                        <select class="form-select" aria-label="Status Peserta">
                                            <option value="kompeten" selected>Kompeten</option>
                                            <option value="belum_kompeten">Belum Kompeten</option>
                                        </select>
                                    </td>
                                    <td>
                                        <a href="peserta2.html" class="btn btn-primary">
                                            Lihat Detail
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Budi Prasetyo</td>
                                    <td>budi@example.com</td>
                                    <td>08198765432</td>
                                    <td>PEMELIHARAAN DAN PERBAIKAN KOMPUTER</td>
                                    <td>SKM/0382/00010/3/2019/15</td>
                                    <td>
                                        <select class="form-select" aria-label="Status Peserta">
                                            <option value="kompeten">Kompeten</option>
                                            <option value="belum_kompeten" selected>Belum Kompeten</option>
                                        </select>
                                    </td>
                                    <td>
                                        <a href="detail.php?id=2" class="btn btn-primary">
                                            Lihat Detail
                                        </a>
                                    </td>
                                </tr>
                                <!-- Tambahkan data peserta lain di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

            <footer class="py-4 mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Admin LSP 2023</div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
