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
        $mail = $_REQUEST['mail'];
        $mdp = $_REQUEST['mdp'];
        
        try 
        {
        /** @var Pdoasso $pdo */
        $visiteur = $pdo ->getVisiteur($mail, $mdp);
        
        }
        catch(Exception $e)
        {
            include("views/erreurs_connexion.php");
        }
         
        if (!is_array($visiteur)) 
        { 
            include("controllers/c_connexion_admin.php");
        } 

        else
        {
           $mail = $visiteur['mail'];
            $nom = $visiteur['nom'];
            $prenom = $visiteur['prenom'];
            include("views_co/acceuil.php");
            connecter($mail, $nom, $prenom);
            cqui(); 
        }
        break;
    }

    case 'admin':
    {
        $mail = $_REQUEST['mail'];
        $mdp = $_REQUEST['mdp'];
        
        try 
        {
        /** @var Pdoasso $pdo */
        $visiteur = $pdo ->getVisiteur($mail, $mdp);
        
        }
        catch(Exception $e)
        {
            include("views/erreurs_connexion.php");
        }
         
        if (!is_array($visiteur)) 
        { 
            include("controllers/c_connexion_admin.php");
        } 

        else
        {
           $mail = $visiteur['mail'];
            $nom = $visiteur['nom'];
            $prenom = $visiteur['prenom'];
            include("views/acceuil.php");
            connecter($login, $nom, $prenom);
            cqui(); 
        }
        break;
    }    
   

    default :
    {
        include("views/connexion.php");
        break;
    }
    
}
