<?php


if (session_status() == true) { session_start();}


require_once 'model/c.Pdoasso.php';



require_once 'fonction/fct.inc.php';


// connexion à la base de données
$pdo = Pdoasso::getPdoasso();
$estConnecte = cqui();
// Routeur--------------------------------

{
    $uc = $_REQUEST['uc'];
//Répartiteur-------------------------------
switch ($uc) 
{

    case 'acceuil_co':
    {
        include 'controllers_co/c_acceuil.php';break;
    }
    case 'DemandeCo':
    {
        include 'controllers/c_connexion.php';break;
    }
    case 'connexion':
    {
        include 'controllers/c_connexion.php';break;
    }
    case 'inscription' :
    {
        include 'controllers/c_inscription.php';break;
    }
    case 'materiel':
    {
        include 'controllers/c_materiel.php';break;
    }
    case 'financier':
    {
        include 'controllers/c_financier.php';break;
    }
    case 'benevole':
    {
        include 'controllers/c_benevole.php';break;
    }
    case 'evenements':
    {
        include 'controllers/c_evenement.php';break;
    }
    case 'contact':
    {
        include 'controllers/c_contact.php';break;
    }
    case 'materiel_co':
    {
        include 'controllers_co/c_materiel.php';break;
    }
    case 'financier_co':
    {
        include 'controllers_co/c_financier.php';break;
    }
    case 'benevole_co':
    {
        include 'controllers_co/c_benevole.php';break;
    }
    case 'evenements_co':
    {
        include 'controllers_co/c_evenement.php';break;
    }
    case 'contact_co':
    {
        include 'controllers_co/c_contact.php';break;
    }
    case 'admin':
    {
        include 'controllers/c_connexion_admin.php';break;
    }
    case 'deconnexion':
    {
        include 'controllers_co/c_acceuil.php';break;
    }

    

}

    
}




