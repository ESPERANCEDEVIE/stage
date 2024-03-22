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
        
        $mdp = $_REQUEST['mdp'];
        $mail = $_REQUEST['mail'];
            
        try 
        {
            /** @var Pdoasso $pdo */
            $admin = $pdo ->getAdmin($mail, $mdp);
        }
        catch(Exception $e)
        {
            include("views/erreurs_connexion.php");
        }
        if (!is_array($admin)) 
        { 
           include("views/erreurs_connexion.php");
        }
        
        else
        {
            $mail = $admin['mail'];
            $nom = $admin['nom'];
            $prenom = $admin['prenom'];
            include("views_admin/demande_benevole.php");
            connecter($mail, $nom, $prenom);
            cqui();
            
        }
        break;
    }
    case 'deconnexion':
    {
        deconnecter();
       
        include("index.php");
    
    }

    default :
    {
        include("views/connexion.php");
        break;
    }
    
}