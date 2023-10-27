<?php
session_start();
require_once 'adminModel.php';

$adminModel = new AdminModel();

if ($adminModel->isAdminLoggedIn()) {
    $adminModel->logoutAdmin();
}

header('Location: admin_login.php');
exit();
?>