

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esperance de vie</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="java.js"></script>
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</head>
<body>

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
            <li><a href="sfonction.php?uc=benevole&action=afficher">Adhérant</a></li>
            <li><a href="sfonction.php?uc=evenements&action=afficher">Evenements</a></li>
            <li><a href="sfonction.php?uc=contact&action=afficher">Nous contacter</a></li>
            
        </ul>
        <a href="sfonction.php?uc=DemandeCo&action=demandeConnexion" class="login_btn"><button>Connexion</button></a>
       
    </header>

    <div class ="erreur">
        <form method="POST" action="sfonction.php?uc=DemandeCo&action=demandeConnexion">
           <h2> il s'emblerait que vous ayez des problemes pour vous connecter</h2><br> 
            <input type="submit" name="co" value="reesayer"><br>
        </form>
        <form action="sfonction.php?uc=contact&action=afficher" method="POST">
            <h2> si le problemes persiste contacter nous</h2><br> 
            <input type="submit" name="re" value="contact">
        </form>
    </div>
<div id="logo">
         <a href="https://www.facebook.com/associationesperancedevie28/"> <img src="images\facebook.png"></a>
        <a href="https://www.instagram.com/esperancedevie28/"> <img src="images\instagram.png"></a>
        
        <img src="images\telephone.png" alt="Téléphone" class="telephone" onmouseover="afficherNumero()" onmouseout="cacherNumero()">
        <span id="telephone-numero">+33 6 68 37 52 28</span>
        <img src="images\outlook.png" alt="mail" class="mail" onmouseover="afficherMail()" onmouseout="cacherMail()">
        <span id="adresse-mail">esperancedevie28@hotmail.com</span>
        

       
        </div>
    </section>
</body>
</html>