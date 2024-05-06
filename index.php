<?php
session_start();
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;
require_once("util/class.PDO.Dada.php");


$uc = isset($_REQUEST['uc']) ? $_REQUEST['uc'] : 'accueil';


switch ($uc) {
    case 'accueil':
        include("vues/v_accueil.php");
        break;
   
              
    case 'apropos':
        include("vues/v_aPropos.php"); 
        break;

	case 'prestations' :
		include("vues/v_lesPrestations.php");
            break;  

	case 'produits' :
	    include("vues/v_lesProduits.php");
        break;  
		
     case 'apropos':
        include("vues/v_apropos.php");
        break;

        case 'devis':
            include("vues/devis.html");
            break;

            case 'panier':
                include ("vues/v_panier.php");
                break;
}
include("vues/v_pied.php") ;


?>