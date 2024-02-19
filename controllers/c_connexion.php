<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeConnexion':
    {
        include("views/connexion.php");
        break;
    }
    case 'valideCo':
    {
        $login = $_REQUEST['login'];
        $mdp = $_REQUEST['mdp'];
        
        /** @var Pdoasso $pdo */
        $visiteur = $pdo ->getVisiteur($login, $mdp,);
         
        if (!is_array($visiteur)) 
        {
            ajouterErreur("Login ou mot de passe incorrect");
            include("views/v_erreurs.php");
        } 
        else 
        {
            include("index.php");
        }
        break;
    }
    case 'deconnexion':
    {
        deconnecter();
        include 'views/v_menu.php';
        include("views/v_connexion.php");
        break;
    }
    default :
    {
        include("views/connexion.php");
        break;
    }
}
