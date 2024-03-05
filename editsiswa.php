<?php
// edit.php

// Include your database connection file
include "koneksi.php";

// Handle the edit logic here
if (isset($_GET['deleteNIS'])) {
    $deleteNIS = $_GET['deleteNIS'];
    
    // Delete data based on $deleteNIS
    $delete = mysqli_query($koneksi, "DELETE FROM siswa WHERE NIS=$deleteNIS");

    // Check if deletion was successful
    if ($delete) {
        // Redirect back to the data page after deletion
        header("Location: data_siswa.php");
        exit();
    } else {
        echo "Error deleting data: " . mysqli_error($koneksi);
    }
} else {
    echo "Invalid request. No NIS provided.";
}
?>
