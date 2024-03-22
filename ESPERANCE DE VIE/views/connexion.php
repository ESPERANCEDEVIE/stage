<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>connexion</title>
<link rel="stylesheet" href="css/style.css">
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
                <a href="" class="dropbtn">Faire un don</a>
                <div class="dropdown-content">
                    <a href="sfonction.php?uc=materiel&action=afficher">Matériel</a>
                    <a href="https://www.paypal.com/donate/?hosted_button_id=LN42QE7HSJ7MC">Financier</a>
                </div>
            </li>
            
            <li><a href="sfonction.php?uc=evenements&action=afficher">Evenements</a></li>
            <li><a href="sfonction.php?uc=contact&action=afficher">Nous contacter</a></li>
            
        </ul>
        <a href="sfonction.php?uc=DemandeCo&action=demandeConnexion" class="login_btn"><button>Connexion</button></a>
       
    </header>
</head>
<body>
<div class="container">






<form action="sfonction.php?uc=connexion&action=valideCo" method="POST" id="loginForm">
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="mail" name="mail" required>
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe :</label>
                <input type="password" id="password" name="mdp" required>
            </div>
            <div class="form-group">
                <a href="#">Mot de passe oublié ?</a>
            </div>
            <div class="btn-group">
                <button type="submit" class="btn">Valider</button>

                <button type="button" class="btn btn-cancel">Annuler</button>
                <DIV></div>

                <button type="button" class="btn btn-not-member"><a href="sfonction.php?uc=benevole&action=afficher" class="btn">Toujours pas membre?</a></button>
                <DIV></div>
            </div>
        </form>
    

</div>

<div id="logo">
        <div id="logo">
         <a href="https://www.facebook.com/associationesperancedevie28/"> <img src="images\facebook.png"></a>
        <a href="https://www.instagram.com/esperancedevie28/"> <img src="images\instagram.png"></a>
        <img src="images\telephone.png" alt="Téléphone" class="telephone" onmouseover="afficherNumero()" onmouseout="cacherNumero()">
        <span id="telephone-numero">+33 6 68 37 52 28</span>
        <img src="images\outlook.png" alt="mail" class="mail" onmouseover="afficherMail()" onmouseout="cacherMail()">
        <span id="adresse-mail">esperancedevie28@hotmail.com</span>
       
        </div>
</body>
</html>

