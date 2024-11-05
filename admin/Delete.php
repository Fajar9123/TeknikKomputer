<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include '../koneksidaftar.php'; // Adjust the path if necessary

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare a delete statement
    $sql = "DELETE FROM peserta WHERE id = ?";
    
    // Create a prepared statement
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind the ID parameter to the statement
        mysqli_stmt_bind_param($stmt, "i", $id);
        
        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect back to peserta.php with a success message
            header("Location: admin/peserta.php?message=Data berhasil dihapus");
            exit();
        } else {
            // Handle error
            echo "Error: Could not execute $sql. " . mysqli_error($conn);
        }
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
