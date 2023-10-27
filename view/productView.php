<?php
$products = $productModel->getProducts(); // Assuming $productModel is already instantiated.

foreach ($products as $id => $product) {
    echo "<div class='col-md-4 mb-4'>
            <div class='card'>
                <img src='{$product['image']}' alt='{$product['title']}' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>{$product['title']}</h5>
                    <p class='card-text'>{$product['description']}</p>
                    <p class='card-text font-weight-bold'>{$product['price']} €</p>
                    <a href='product.php?id=$id' class='btn btn-primary mb-2'>Voir Détail</a>
                    <a href='cart.php?action=add&id=$id' class='btn btn-success'>Ajouter au Panier</a>
                </div>
            </div>
          </div>";
}
?>
