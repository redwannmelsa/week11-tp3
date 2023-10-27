<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-5">Votre Panier</h1>
    <?php
    $cartItems = CartModel::getCartItems();
    if (empty($cartItems)) : ?>
        <p class="text-center">Votre panier est vide.</p>
    <?php else : ?>
        <table class="table table-striped shadow-lg">
            <thead class="thead-dark">
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cartItems as $id => $item) : ?>
                <tr>
                    <td><?php echo $item['title']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <p class="text-right">Total: €<?php echo CartModel::calculateTotal(); ?></p>
        <a href="checkout.php" class="btn btn-primary btn-lg">Commander</a>
    <?php endif; ?>
</div>
<style>
    /* Styles for the Cart View */
</style>
</body>
</html>