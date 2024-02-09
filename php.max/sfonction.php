<?php


if (session_status() === PHP_SESSION_NONE) { session_start(); }

require_once 'model/class.Pdoasso.php';



require_once 'doc/fct.inc.php';


// connexion à la base de données
$pdo = Pdoasso::getPdoasso();
$estConnecte = estConnecte();
// Routeur--------------------------------
if (!isset($_REQUEST['uc'])|| !$estConnecte)
    $uc = 'connexion';
else
    $uc = $_REQUEST['uc'];

//Répartiteur-------------------------------
switch ($uc) {
    case 'connexion':
    {
        include 'controllers/c_connexion.php';break;
    }
    case 'inscription' :
    {
        include 'controllers/c_inscription.php';break;
    }
    case 'dons':
    {
        include 'controllers/c_dons.php';break;
    }
    case 'devenir':
    {
        include 'controllers/c_adherant.php';break;
    }



    
}


