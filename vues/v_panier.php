<form id="panierForm">
    <h2>Votre panier chez SS Wash Auto</h2>
<!-- v_panier.php -->

<?php
session_start();

// Affichez les produits dans le panier
if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) {
    echo '<h2>Panier</h2>';
    echo '<ul>';
    foreach ($_SESSION['panier'] as $produit) {
        echo '<li>' . $produit['nomProduit'] . ' - $' . $produit['prixProduit'] . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>Votre panier est vide.</p>';
}
?>


 </form>