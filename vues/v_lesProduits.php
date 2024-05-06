
<section>
        <div class="container3">
            <div class="block-img">
            <?php 
$pdo = PdoSsauto::getPdoSsauto();
$lesProduits = $pdo->getLesArticlesDeCategorieProduits();

foreach ((array)$lesProduits as $unProduit) {
    echo '<div class="product product-item">';
    echo '<h2 class="product-title">' . $unProduit['desiArt'] . '</h2>';
    
    // Ajoutez la balise <img> pour afficher la photo
    echo '<img src="' . $unProduit['photoArt'] . '" alt="Product Image" class="product-image">';
    
    echo '<p class="product-description">' . $unProduit['caractArt'] . '</p>';
   // echo '<p class="product-description">' . $unProduit['descripArt'] . '</p>';
    echo '<p class="product-price">' . $unProduit['prixArt'] . '</p>';
    echo '<button class="ajoutPanier" onclick="window.location.href=\'index.php?uc=panier\'">Ajouter au Panier</button>';
    //echo '<button class="ajoutPanier">Ajouter au Panier</button>';
    echo '</div>';
}
?>


                
            </div>
        </div>
    </section>

    <!-- v_produit.php -->

<?php
session_start();

// Votre code pour obtenir les informations du produit à partir de la base de données
// ...

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouterAuPanier'])) {
    // Récupérez les informations du produit
    $idProduit = $_POST['idProduit'];
    $nomProduit = $_POST['nomProduit'];
    $prixProduit = $_POST['prixProduit'];

    // Ajoutez le produit au panier (dans la session)
    $produit = array(
        'idProduit' => $idProduit,
        'nomProduit' => $nomProduit,
        'prixProduit' => $prixProduit,
        // Ajoutez d'autres informations du produit si nécessaire
    );

    // Si le panier n'existe pas encore, créez-le
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    // Ajoutez le produit au panier
    $_SESSION['panier'][] = $produit;

    // Redirigez l'utilisateur vers la page du panier ou une autre page
    header('Location: vues/v_panier.php');
    exit();
}
?>


