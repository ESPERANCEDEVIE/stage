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
                <a href="dons.php" class="dropbtn">Faire un don</a>
                <div class="dropdown-content">
                    <a href="#materiel">Matériel</a>
                    <a href="#financier">Financier</a>
                </div>
            </li>
            <li><a href="benevole.php">Adhérant</a></li>
            <li><a href="evenements.php">Evenements</a></li>
            <li><a href="#contact">Nous contacter</a></li>
            
        </ul>
        <a href="connexion.php" class="login_btn"><button>Connexion</button></a>
       
    </header>
  <!-- section contact -->

  <section id="contact">
        <h1 class="section_title">Nous contacter</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.fr/maps/place/Mairie+de+Luisant/@48.4295002,1.4742383,21z/data=!4m6!3m5!1s0x47e40c6019665e71:0x6ed51f7144bad032!8m2!3d48.4294625!4d1.4741324!16s%2Fg%2F1v44d84s?entry=ttu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <form action="#">
                    <input type="text"placeholder="Nom">
                    <input type="email"placeholder="Adresse Mail">
                    <input type="text"placeholder="Objet">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
 

    <footer>
        <p> </p>
    </footer>