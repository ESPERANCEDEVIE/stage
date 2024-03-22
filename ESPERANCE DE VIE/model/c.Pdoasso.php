<?php
/**
 * Classe d'accès aux données.

 * Utilise les services de la classe PDO
 * pour l'application GSB
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO
 * $maBase qui contiendra l'unique instance de la classe

 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class Pdoasso{
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=association';
      	private static $user='root' ;
      	private static $mdp='' ;
		private static $monPdo;
		private static $maBase=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */
	private function __construct(){
    	Pdoasso::$monPdo = new PDO(Pdoasso::$serveur.';'.Pdoasso::$bdd, Pdoasso::$user, Pdoasso::$mdp);
		Pdoasso::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		Pdoasso::$monPdo = null;
	}

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdoasso = Pdoasso::getPdoasso();
     * @return null L'unique objet de la classe Pdoasso
     */
	public  static function getPdoasso(){
		if(Pdoasso::$maBase==null){
			Pdoasso::$maBase= new Pdoasso();
		}
		return Pdoasso::$maBase;
	}

    
    public function getVisiteur($mail,$mdp){
        $req = "select mail,nom,prenom from visiteur where mail='$mail' and mdp='$mdp'";
        $rs = Pdoasso::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    public function getAdmin($mail,$mdp){
        $req = "select mail,nom,prenom from admin where mail='$mail' and mdp='$mdp'";
        $rs = Pdoasso::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    public function newBenevole($nom,$prenom,$mail,$dateNaiss,$mobile,$mdp,$civilite,$pk,$adresse,$ville,$CP,$pays){
        $req = " INSERT INTO `demandebenevole` VALUES ('$nom','$prenom','$mail','$dateNaiss','$mobile','$mdp','$civilite','$pk','$adresse','$ville','$CP','$pays')";
        $rs = Pdoasso::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }
    

    public function newVisiteur($nom,$prenom,$mail,$dateNaiss,$mobile,$mdp,$civilite,$pk,$adresse,$ville,$CP,$pays){
        $req = " INSERT INTO `visiteur` VALUES ('$nom','$prenom','$mail','$dateNaiss','$mobile','$mdp','$civilite','$pk','$adresse','$ville','$CP','$pays')";
        $rs = Pdoasso::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    /**
     * Transforme une date au format français jj/mm/aaaa vers le format anglais aaaa-mm-jj
     
    * @param $madate au format  jj/mm/aaaa
    * @return la date au format anglais aaaa-mm-jj
    */
    

    /**
     * Retourne sous forme d'un tableau associatif toutes les lignes de frais hors forfait
     * concernées par les deux arguments
     * La boucle foreach ne peut être utilisée ici, car on procède
     * à une modification de la structure itérée - transformation du champ date-
     * @param $idVisiteur
     * @param $mois 'sous la forme aaaamm
     * @return array 'Tous les champs des lignes de frais hors forfait sous la forme d'un tableau associatif
     */
    


    /**
     * Retourne les mois pour lesquels, un visiteur a une fiche de frais
     * @param $idVisiteur
     * @return array 'Un tableau associatif de clé un mois - aaaamm - et de valeurs l'année et le mois correspondant
     */
    

    /**
     * Retourne les informations d'une fiche de frais d'un visiteur pour un mois donn�
     * @param $idVisiteur
     * @param $mois 'sous la forme aaaamm
     * @return mixed 'Un tableau avec des champs de jointure entre une fiche de frais et la ligne d'�tat
     */
    
    

    






/*public function getMois(){
    $req = "SELECT mois from  fichefrais where idvisiteur ='$idVisiteur' order by mois desc ";
    $res = Pdoasso::$monPdo->query($req);
    $laLigne = $res->fetchAll();
        return $laLigne;
}*/


}