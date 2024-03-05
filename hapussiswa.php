<?php
// hapus.php

// Handle the delete logic here
if (isset($_GET['NIS'])) {
    $NIS = $_GET['NIS'];

    // Implement your logic to delete the data based on $id
    // For example, you can run a DELETE query based on $id
    // Redirect back to the data page after deletion
    header("Location: data_siswa.php");
    exit();
} else {
    echo "Invalid request. No NIS provided.";
}
?>
