<?php
// Simuler des données de produits
$products = array(
    array("T-shirt Rouge", "T-shirt rouge avec un design cool", 19.99, "images/tshirt_rouge.jpg"),
    array("Jeans Bleus", "Jeans décontractés bleus", 29.99, "images/jeans_bleus.jpg"),
    // Ajoutez autant d'éléments que nécessaire
);

// Affichez les produits
foreach ($products as $product) {
    echo '<div class="product">';
    echo '<img src="' . $product[3] . '" alt="' . $product[0] . '">';
    echo '<h2>' . $product[0] . '</h2>';
    echo '<p>' . $product[1] . '</p>';
    echo '<p>Prix : $' . $product[2] . '</p>';
    echo '<button onclick="ajouterAuPanier(\'' . $product[0] . '\')">Ajouter au Panier</button>';
    echo '</div>';
}
?>