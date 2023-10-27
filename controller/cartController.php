<?php
require_once('cart.php');

if (isset($_GET['action']) && $_GET['action'] === 'add' && isset($_GET['id'])) {
    CartModel::addItemToCart($_GET['id']);
}

require('cart_view.php');
?>
