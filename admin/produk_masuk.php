<?php
require_once "../koneksipenjualan.php"; // Memanggil file koneksi.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - Dumpling Cake</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Dumplig Cake</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                    <?php
               
                    ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <?php
              
                    ?>
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
                    <a class="nav-link" href="tables.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Product
                    </a>
                    <!-- Tambahkan menu Produk Masuk di sini -->
                    <a class="nav-link" href="incoming_products.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Produk Masuk
                    </a>
                     <a class="nav-link" href="logout.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                        Logout
                    </a>
                </div>
            </div>
            <!-- Tambahkan tombol logout di sini -->
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
                </a>
            </div>
        </nav>
    </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Product</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Product
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Kuantitas</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                     <?php
        
// Initialize total price and total quantity variables
$totalPrice = 0;
$totalQuantity = 0;

// Display product data in HTML table
if (!empty($products)) {
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . $product['nama_product'] . "</td>";
        echo "<td>Rp " . $product['harga_product'] . "</td>";
        echo "<td>" . $product['qty_product'] . "</td>";
        echo "<td>Rp " . $product['total_product'] . "</td>";
        echo "</tr>";

        // Add product price and quantity to totals
        $totalPrice += $product['total_product'];
        $totalQuantity += $product['qty_product'];
    }

    // Display total row after all products
    echo "<tr>";
    echo "<td colspan='2'><strong>Total:</strong></td>";
    echo "<td><strong>" . $totalQuantity . "</strong></td>";
    echo "<td><strong>Rp " . $totalPrice . "</strong></td>";
    echo "</tr>";
} else {
    // Display a message if there are no products
    echo "<tr><td colspan='4'>Tidak ada produk yang tersedia.</td></tr>";
}
?>

                        <tr>
                           
                        </tr>
                    </tbody>
                </table>
                                    <?php
                                    include 'koneksi.php';
                                    $no = 1;
                                    $query = mysqli_query($conn, "SELECT * FROM product ORDER BY id ASC");
                                    while ($row = mysqli_fetch_array($query)) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><img src="img/<?php echo $row['thumbnail']; ?>" height="100" width="150"></td>
                                            <td><?php echo $row['product_name']; ?></td>
                                            <td><?php echo $row['category']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            
                                            <td>
                                                <a class="btn btn-warning" href="edit_form.php?id=<?php echo $row['id']; ?>">Edit</a>
                                                <a href="Delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger  btn-del ms-2">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endwhile ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous"></script>
</body>

</html>