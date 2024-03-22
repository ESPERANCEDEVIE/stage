<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'afficher';
}
$action = $_REQUEST['action'];
switch ($action) 
{
    case 'afficher':
    {
        include("views/evenements.php");
        break;
    }
        }
?>