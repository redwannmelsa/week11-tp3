<?php
session_start();
require_once 'productModel.php'; // Include the model.

// Redirect to admin login page if not logged in
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: admin_login.php');
    exit();
}

// Load products from the model
$productModel = new ProductModel();
$products = $productModel->getProducts(); // Assuming the model has a getProducts() method.

include 'adminDashboardView.php'; // Include the view.
?>