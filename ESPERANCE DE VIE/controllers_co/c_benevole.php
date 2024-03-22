<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'afficher';
}
$action = $_REQUEST['action'];
switch ($action) 
{
    case 'afficher':
    {
        include("views_co/benevole.php");
        break;
    }
    case 'verifinscription':
        {
            $nom = $_REQUEST ['nom'];
            $prenom = $_REQUEST ['prenom'];
            $mail = $_REQUEST ['mail'];
            $dateNaiss = $_REQUEST ['dateNaiss'];
            $mobile = $_REQUEST ['mobile'];
            $mdp = $_REQUEST ['mdp'];
            $civilite = $_REQUEST ['civilite'];
            $pk = $_REQUEST ['pk'];
            $adresse = $_REQUEST ['adresse'];
            $ville = $_REQUEST ['ville'];
            $CP = $_REQUEST ['CP'];
            $pays = $_REQUEST ['pays'];
         
            if ($pk == "benevole")

            {
                try
                {

                /** @var Pdoasso $pdo */
                $visiteur = $pdo->newBenevole($nom,$prenom,$mail,$dateNaiss,$mobile,$mdp,$civilite,$pk,$adresse,$ville,$CP,$pays);
                include("controllers/c_connexion.php");

                } 

                catch(Exception $e)
                {
                    include("views_co/erreurs_inscription.php")  ;
                }
            }

            else  
            {
                try
                {
                    /** @var Pdoasso $pdo */
                    $visiteur = $pdo->newVisiteur($nom,$prenom,$mail,$dateNaiss,$mobile,$mdp,$civilite,$pk,$adresse,$ville,$CP,$pays);
                    include("controllers/c_connexion.php");
                }

                catch(Exception $e)
                {
                    include("views_co/erreurs_inscription.php")  ;
                }

            }
           
            
        }
    }
?>