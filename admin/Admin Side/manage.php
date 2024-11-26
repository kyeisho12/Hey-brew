<?php
include("php/config.php");
include("php/connection.php");

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}   

if (isset($_POST['addProd'])) {
    header('Location: addProd.php');
    exit();
}

if (isset($_POST['logOut'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}

// Add other POST request handling here (e.g., delete, update)

// Fetch products from database
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

// Include the HTML file
include('manage.html');
?>