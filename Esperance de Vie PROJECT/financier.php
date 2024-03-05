<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esperance de vie</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- barre de nav  -->
    <header>
      
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Esperance</span><span> de</span> Vie</p>
        </div>
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Faire un don</a>
                <div class="dropdown-content">
                    <a href="materiel.php">Matériel</a>
                    <a href="#financier">Financier</a>
                </div>
            </li>
            <li><a href="benevole.php">Adhérant</a></li>
            <li><a href="evenements.php">Evenements</a></li>
            <li><a href="contact.php">Nous contacter</a></li>
            
        </ul>
        <a href="connexion.php" class="login_btn"><button>Connexion</button></a>
       
    </header>
    <!-- dons financier -->
    <section id="financier">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
    <!-- Informations personnelles -->
    <label for="nom">Nom complet:</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="email">Adresse Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="telephone">Téléphone:</label>
    <input type="tel" id="telephone" name="telephone"><br>

    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse"><br>

    <label for="ville">Ville:</label>
    <input type="text" id="ville" name="ville"><br>

    <label for="code_postal">Code Postal:</label>
    <input type="text" id="code_postal" name="code_postal"><br>

    <label for="pays">Pays:</label>
    <input type="text" id="pays" name="pays"><br>

    <!-- Montant du don -->
    <label for="montant">Montant du Don (EUR):</label>
    <input type="number" id="montant" name="montant" required><br>

    <!-- Méthode de paiement -->
    <input type="hidden" name="cmd" value="_donations">
    <input type="hidden" name="business" value="votre_email_paypal@example.com">
    <input type="hidden" name="currency_code" value="EUR">

    <!-- Confirmation -->
    <input type="checkbox" id="confirmation" name="confirmation" required>
    <label for="confirmation">En cochant cette case, je confirme avoir lu et accepté les Conditions Générales de Don de l'organisation.</label><br>

    <input type="checkbox" id="informations" name="informations">
    <label for="informations">J'aimerais rester informé(e) des activités de l'organisation et des opportunités de bénévolat.</label><br>

    <!-- Bouton de validation -->
    <input type="submit" value="Valider le Don">
</form>