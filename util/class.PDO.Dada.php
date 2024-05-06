 <?php

class PdoSsauto
{
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=ssauto';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoSsauto = null;

    private function __construct()
    {
        try {
            PdoSsauto::$monPdo = new PDO(
                PdoSsauto::$serveur . ';' . PdoSsauto::$bdd,
                PdoSsauto::$user,
                PdoSsauto::$mdp
            );
            PdoSsauto::$monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

    public static function getPdoSsauto()
    {
        if (PdoSsauto::$monPdoSsauto == null) {
            PdoSsauto::$monPdoSsauto = new PdoSsauto();
        }
        return PdoSsauto::$monPdoSsauto;
    }

    public function getLesCategories()
    {
        $req = "select * from article";
        $res = PdoSsauto::$monPdo->query($req);
        return $res;
    }

    public function getLesArticlesDeCategoriePrestations()
    {
        $req = "select * from article where typeArt ='prestations'";
        $res = PdoSsauto::$monPdo->prepare($req);
        $res->execute();

        $lesLignes = $res->fetchAll(PDO::FETCH_ASSOC);
		
        return $lesLignes;
    }

    public function getLesArticlesDeCategorieProduits()
    {
        $req = "select * from article where typeArt ='produits'";
        $res = PdoSsauto::$monPdo->prepare($req);
        $res->execute();

        $lesLignes = $res->fetchAll(PDO::FETCH_ASSOC);
		
        return $lesLignes;
    }

    

/*
class PdoSsauto
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=ssauuto';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoSsauto = null;

		public  static function getPdoSsauto()
	{
		if(PdoSsauto::$monPdoSsauto == null)
		{
			PdoSsauto::$monPdoSsauto=new PdoSsauto();
		}
		return PdoSsauto::$monPdoSsauto;  
	}


	public function getLesCategories($infosBdd)
{
	$req = "select * from article";
    $resultat=mysqli_query($resultat,$infosBdd);
		
	return $resultat;
	}


public function getLesArticlesDeCategorie()
{
    $req="select * from article where typeArt ='prestation'";
    $res=  PdoSsauto::$monPdo->prepare($req);
	$res->execute();

    $lesLignes = $res->fetchAll();
    return $lesLignes; 
}
/*
 public function getLesProduits()
	{
	 $req="select * from produit";
	$res=  Pdohtauto_a::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes; 
	}*/

}