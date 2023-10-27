<?php
session_start();
require_once 'http://localhost/tp3-ecommerce/model/productModel.php';

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: admin_login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    
    $productModel = new ProductModel(); // Instantiate the model.

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = ['title' => $title, 'description' => $description, 'image' => $image, 'price' => $price];

    header('Location: admin_dashboard.php');
    exit();
}
?>