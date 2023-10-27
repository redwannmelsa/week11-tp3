<?php
session_start();
require_once 'adminModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $adminModel = new AdminModel();

    if ($adminModel->isAdminAuthenticated($username, $password)) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php');
        exit();
    } else {
        $error_message = 'Nom d\'utilisateur ou mot de passe incorrect!';
    }
}

include 'adminLoginView.php';
?>