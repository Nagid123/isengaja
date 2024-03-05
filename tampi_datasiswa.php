<?php
// edit.php

// Handle the edit logic here
if (isset($_GET['NIS'])) {
    $NIS = $_GET['NIS'];

    // Fetch data based on $id and populate the form for editing
    // You should implement your own logic to retrieve the data from the database
    // For example, you can run a SELECT query based on $id
    // Display the form for editing here
} else {
    echo "Invalid request. No NIS provided.";
}
?>
