<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'afficher';
}
$action = $_REQUEST['action'];
switch ($action) 
{
    case 'afficher':
    {
        include("views/contact.php");
        break;
    }
    case 'envoyer':
    {
        $nom = $_REQUEST ['nom'];
        $email = $_REQUEST ['email'];
        $objet = $_REQUEST ['objet'];
        $text = $_REQUEST ['text'];
       
    }
        
}
?>