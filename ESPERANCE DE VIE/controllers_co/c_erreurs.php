<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'afficher';
}
$action = $_REQUEST['action'];
switch ($action) 
{
    case 'inscription':
    {
        include("views/erreurs_inscriptions.php");
        break;
    }
        }
?>