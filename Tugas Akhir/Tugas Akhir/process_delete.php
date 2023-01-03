<?php
// Connect to the database
$db = mysqli_connect("localhost", "irfaahmadr28", "Mancity1894", "KOPI");

// Check if the form has been submitted
if (isset($_POST['delete'])) {
    // Get the form data
    $name = $_POST['name'];

    // Delete the item from the database
    $query = "DELETE FROM `order` WHERE name = '$name'";
    mysqli_query($db, $query);
}

// Redirect to the cart page
header("Location: process_add.php");
