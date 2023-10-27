<?php 
session_start(); 
define('ROOT', dirname(__DIR__).DIRECTORY_SEPARATOR.'tp3-ecommerce'.DIRECTORY_SEPARATOR);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>

    <div class="container my-5">
        <h1 class="text-center mb-5">Bienvenue sur Notre Boutique!</h1>
        <?php include 'controller/productController.php'; ?>
    </div>

    <style>
    body {
    background-color: #f8f9fa;
    font-family: 'Arial', sans-serif;
}

.container {
    max-width: 1140px;
    margin: auto;
}

.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    width: 100%;
    height: auto;
    max-height: 200px;
    object-fit: cover;
}

.btn {
    width: 100%;
}

</style>
</body>
</html>