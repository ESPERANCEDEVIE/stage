<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire d'Inscription</title>
<link rel="stylesheet" href="connexion.css">
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
            <li><a href="#home">Accueil</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Faire un don</a>
                <div class="dropdown-content">
                    <a href="#materiel">Matériel</a>
                    <a href="#financier">Financier</a>
                </div>
            </li>
            <li><a href="#adhérant">Adhérant</a></li>
            <li><a href="#évenements">Evenements</a></li>
            <li><a href="#contact">Nous contacter</a></li>
            
        </ul>
        <a href="" class="login_btn"><button>Connexion</button></a>
       
    </header>
</head>
<body>
<div class="container">
<h2>Se connecter</h2>


<form method="POST" action="sfonction.php?uc=connexion&action=valideConnexion">



    <p>
        <label for="nom">E-mail</label>
        <input id="login" type="text" name="login" size="30" >
    </p>
    <p>
        <label for="mdp">Mot de passe</label>
        <input id="mdp" type="password" name="mdp" size="30">
    </p>
    <input type="submit" value="Valider" name="valider">
    <input type="reset" value="Annuler" name="annuler"><br>
</form>
<form action="sfonction.php?uc=inscription&action=demandeinscription" method="post">
    <input type="submit" value="inscription" name="inscription">
</form>
</div>
</body>
</html>