<?php

function connexion()
{
    $serveur="localhost";
    $login="root";
    $mdp="";
    $base="ssauto";
    //Connexion  au serveur de BD
    $infosBdd=mysqli_connect($serveur, $login, $mdp, $base) or die("Erreur " . mysqli_error($infosBdd));

    return $infosBdd;


/*
// Exécutez une requête SQL pour récupérer les données de la table
$sql = "SELECT desiArt, caractArt, descripArt, prixArt FROM article";
$resultat = mysqli_query($infosBdd, $sql);

if ($infosBdd) {
    // Parcourez les résultats de la requête et stockez-les dans un tableau
    $lesPrestations = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_error($infosBdd);
}
*/
// Fermez la connexion à la base de données
mysqli_close($infosBdd);

}
