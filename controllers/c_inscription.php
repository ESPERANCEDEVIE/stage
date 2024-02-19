<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeinscription';
}
$action = $_REQUEST['action'];
switch ($action) { 
    case 'demandeinscription':
    {
        
        include("views/v_inscription.php");
        break;
    }
    case 'verifinscription':
    {
        $login = $_REQUEST['login'];
        $mdp = $_REQUEST['mdp'];
        /** @var Pdoasso $pdo */
        $visiteur = $pdo->newVisiteur($nom,$prenom,$numMobile,$majeur,$statut,$login,$mdp,$verifmdp);
        if (!is_array($visiteur)) {
            ajouterErreur("Il semble y avoir une erreur lors de la saise des données !");
            include("views/v_erreurs.php");
            include("views/v_connexion.php");
        } else {
            include 'index.php';
        }
        break;
    }
    case 'deconnexion':
    {
        deconnecter();
        include'views/v_menu.php';
        include("views/v_connexion.php");
        break;
    }
    default :
    {
        include("views/v_connexion.php");
        break;
    }
}