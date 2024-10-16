<?php
include 'koneksi.php';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM product WHERE id='$id'");
    $product = mysqli_fetch_array($query);

    if (!$product) {
        echo "Product not found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            Navbar Brand
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            Sidebar Toggle
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            Navbar Search
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            Navbar
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav> -->
        <!-- <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Product
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div> -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="tables.php">Product</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                        <div class="card">
                            <div class="card-body"> 
                                <form action="Edit.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Product name</label>
                                        <input type="text" class="form-control" placeholder="Product Name" name="product_name" id="product_name" value="<?php echo $product['product_name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control" placeholder="Category" name="category" id="category" value="<?php echo $product['category']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" min="0" class="form-control" placeholder="Price" name="price" id="price" value="<?php echo $product['price']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="thumbnail">Thumbnail</label>
                                        <input type="file" class="form-control mb-3" name="thumbnail" id="thumbnail" accept="image/*">
                                        <img src="img/<?php echo $product['thumbnail']; ?>" height="100" width="150">
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                    <input type="submit" value="Update" class="btn btn-primary mt-2">
                                </form>
                            </div>
                        </div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
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
                </footer> -->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous"></script>
    </body>
</html>