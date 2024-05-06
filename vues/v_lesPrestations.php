
<section>
        <div class="container3">
            <div class="block-img">
            <?php 
$pdo = PdoSsauto :: getPdoSsauto();
$lesPrestations = $pdo->getLesArticlesDeCategoriePrestations();

foreach ((array)$lesPrestations as $unePrestation) {
    echo '<div class="product product-item">';
    echo '<h2 class="product-title">' . $unePrestation['desiArt'] . '</h2>';
    
    // Ajoutez la balise <img> pour afficher la photo
    echo '<img src="' . $unePrestation['photoArt'] . '" alt="Product Image" class="product-image">';
    
    echo '<p class="product-description">' . $unePrestation['caractArt'] . '</p>';
   // echo '<p class="product-description">' . $unePrestation['descripArt'] . '</p>';
    echo '<p class="product-price">' . $unePrestation['prixArt'] . '</p>';
    echo '<button class="ajoutPanier" onclick="window.location.href=\'index.php?uc=panier\'">Ajouter au Panier</button>';
    echo '</div>';
}
?>


                
            </div>
        </div>
    </section>

