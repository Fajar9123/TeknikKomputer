<?php
include "koneksi.php";

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Check if form data is posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve POST data
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $price = (double) $_POST['price']; // Convert price to double
    $foto = $_FILES['thumbnail']['name'];

    $dir = 'img/';
    $tmpFile = $_FILES['thumbnail']['tmp_name'];

    // Move the uploaded file
    if (move_uploaded_file($tmpFile, $dir . $foto)) {
        // Prepare the SQL query
        $query_sql = "INSERT INTO product (product_name, category, price, thumbnail) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query_sql);

        if ($stmt) {
            $stmt->bind_param("ssds", $product_name, $category, $price, $foto); // Note the change to "ssds" for bind_param

            // Execute the query
            try {
                if ($stmt->execute()) {
                    echo "<script>
                            alert('Add Product Success!');
                            window.location.href='tables.php';
                          </script>";
                } else {
                    throw new Exception("Execute failed: " . $stmt->error);
                }
            } catch (Exception $e) {
                echo "<script>
                        alert('Add Product Failed: " . addslashes($e->getMessage()) . "');
                        window.location.href='tables.php';
                      </script>";
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "<script>
                    alert('Failed to prepare statement: " . addslashes($conn->error) . "');
                    window.location.href='tables.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('File upload failed!');
                window.location.href='tables.php';
              </script>";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "<script>
            alert('Invalid request method!');
            window.location.href='tables.php';
          </script>";
}
?>
