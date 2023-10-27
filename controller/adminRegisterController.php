<?php
session_start();
require_once 'adminModel.php';

$adminModel = new AdminModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $adminModel->registerAdmin($username, $password);

    header('Location: admin_login.php');
    exit();
}
?>