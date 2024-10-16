<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id']; // Ensure this ID is passed from the form
    $name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $foto = ''; // Initialize photo file name

    // Check if a new photo is uploaded
    if (!empty($_FILES['thumbnail']['name'])) {
        $foto = $_FILES['thumbnail']['name'];
        $dir = 'img/';
        $tmpFile = $_FILES['thumbnail']['tmp_name'];
    } else {
        // If no new photo is uploaded, use the existing photo
        $querySelectFoto = "SELECT thumbnail FROM product WHERE id = '$id'";
        $resultSelectFoto = mysqli_query($conn, $querySelectFoto);
        if ($resultSelectFoto && mysqli_num_rows($resultSelectFoto) > 0) {
            $rowSelectFoto = mysqli_fetch_assoc($resultSelectFoto);
            $foto = $rowSelectFoto['thumbnail'];
        }
    }

    // Prepare the SQL query to update the product data
    $query = "UPDATE product SET product_name = ?, category = ?, price = ?, thumbnail = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("ssisi", $name, $category, $price, $foto, $id);

    // Execute the query
    if ($stmt->execute()) {
        // Only move the uploaded file if the update query was successful
        if (!empty($_FILES['thumbnail']['name'])) {
            move_uploaded_file($tmpFile, $dir . $foto);
        }

        echo "<script>
                alert('Edit Product Success!');
                window.location.href='tables.php';
              </script>";
    } else {
        echo "<script>
                alert('Edit Product Failed!');
                window.location.href='tables.php';
              </script>";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
