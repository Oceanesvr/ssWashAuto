<?php
//initPanier();
$action = $_REQUEST['action'];
switch($action)
{
	case 'prestations':
	{
  	$lesPrestations = $pdo->getLesArticlesDeCategoriePrestations();
		include("vues/v_lesPrestations.php");

  		break;
	}

    case 'produits':
        {
          $lesProduits = $pdo->getLesArticlesDeCategorieProduits();
            include("vues/v_lesProduits.php");
              break;
        }
}
?>