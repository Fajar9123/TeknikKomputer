    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard TEKOM - Data Asesor</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <style>
            body {
                background-color: #f8f9fa;
            }

            .container-fluid {
                margin-top: 20px;
            }

            h1 {
                font-size: 1.25rem;
                font-weight: bold;
            }

            .section-title {
                font-size: 1.2rem;
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

            .modal-header {
                background-color: #007bff;
                color: white;
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
                        <h1 class="mt-4">Data Asesor</h1>

                        <!-- Chart Section -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Grafik Penilaian Data Asesor
                            </div>
                            <div class="card-body">
                                <canvas id="assessorChart"></canvas>
                            </div>
                        </div>

                        <!-- Data Table Section -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Data Asesor
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Asesor</th>
                                                <th>NIP</th>
                                                <th>Jabatan</th>
                                                <th>Institusi</th>
                                                <th>Rating</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Asesor A</td>
                                                <td>123456789</td>
                                                <td>Penguji</td>
                                                <td>Institut A</td>
                                                <td>4.5</td>
                                                <td>
                                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal1">Edit</button>
                                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal1">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Asesor B</td>
                                                <td>987654321</td>
                                                <td>Penguji</td>
                                                <td>Institut B</td>
                                                <td>4.7</td>
                                                <td>
                                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal2">Edit</button>
                                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal2">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Asesor C</td>
                                                <td>135792468</td>
                                                <td>Penguji</td>
                                                <td>Institut C</td>
                                                <td>4.8</td>
                                                <td>
                                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal3">Edit</button>
                                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal3">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Asesor D</td>
                                                <td>246813579</td>
                                                <td>Penguji</td>
                                                <td>Institut D</td>
                                                <td>4.6</td>
                                                <td>
                                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal4">Edit</button>
                                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal4">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Asesor E</td>
                                                <td>369258147</td>
                                                <td>Penguji</td>
                                                <td>Institut E</td>
                                                <td>4.9</td>
                                                <td>
                                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal5">Edit</button>
                                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal5">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Edit and Delete Modals -->
                        <!-- Example Edit Modal -->
                        <div class="modal fade" id="editModal1" tabindex="-1" aria-labelledby="editModalLabel1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel1">Edit Asesor A</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Edit form here -->
                                        <form>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama Asesor</label>
                                                <input type="text" class="form-control" id="name" value="Asesor A">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nip" class="form-label">NIP</label>
                                                <input type="text" class="form-control" id="nip" value="123456789">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jabatan" class="form-label">Jabatan</label>
                                                <input type="text" class="form-control" id="jabatan" value="Penguji">
                                            </div>
                                            <div class="mb-3">
                                                <label for="institusi" class="form-label">Institusi</label>
                                                <input type="text" class="form-control" id="institusi" value="Institut A">
                                            </div>
                                            <div class="mb-3">
                                                <label for="rating" class="form-label">Rating</label>
                                                <input type="number" class="form-control" id="rating" value="4.5" step="0.1" min="0" max="5">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add other modals similarly... -->

                    </div>
                </main>

                <footer class="py-4 mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; TEKOM 2024</div>
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/simple-datatables.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script>
        const ctx = document.getElementById('assessorChart').getContext('2d');
        const assessorChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Asesor A', 'Asesor B', 'Asesor C', 'Asesor D', 'Asesor E'],
                datasets: [{
                    label: 'Rating',
                    data: [4.5, 4.7, 4.8, 4.6, 4.9],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 2,
                    barPercentage: 0.5, // Adjusts the width of the bars
                    categoryPercentage: 0.5 // Adjusts the spacing between groups of bars
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                size: 16, // Font size for legend
                                weight: 'bold' // Font weight for legend
                            },
                            padding: 20 // Padding around the legend
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `Rating: ${tooltipItem.raw}`; // Customize tooltip label
                            }
                        },
                        titleFont: {
                            size: 14 // Font size for tooltip title
                        },
                        bodyFont: {
                            size: 14 // Font size for tooltip body
                        },
                        padding: 10 // Padding inside the tooltip
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Rating',
                            font: {
                                size: 16 // Font size for y-axis title
                            }
                        },
                        ticks: {
                            stepSize: 0.5 // Step size for y-axis ticks
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Asesor',
                            font: {
                                size: 16 // Font size for x-axis title
                            }
                        }
                    }
                }
            }
        });
    </script>
    </body>

    </html>
