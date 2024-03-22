<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch ($action) 
{

    case 'afficher':
    {

        $prenom = $_SESSION['prenom'];
        include("views_co/acceuil.php");
        
        break;
    }

    case 'deconnexion':
        {
            deconnecter();
            include("index.php");
        }

}