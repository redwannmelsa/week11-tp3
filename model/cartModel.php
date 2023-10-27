<?php
session_start();

class CartModel {
    // Add an item to the cart
    public static function addItemToCart($id) {
        if (isset($_SESSION['products'][$id])) {
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity']++;
            } else {
                $_SESSION['cart'][$id] = [
                    'title' => $_SESSION['products'][$id]['title'],
                    'quantity' => 1
                ];
            }
        }
    }

    // Get the cart items
    public static function getCartItems() {
        return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }

    // Calculate the total
    public static function calculateTotal() {
        $total = 0;
        foreach ($_SESSION['cart'] as $id => $item) {
            $total += $_SESSION['products'][$id]['price'] * $item['quantity'];
        }
        return $total;
    }
}
?>
