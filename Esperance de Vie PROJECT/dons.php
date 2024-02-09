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
                    <a href="#materiel">Matériel</a>
                    <a href="#financier">Financier</a>
                </div>
            </li>
            <li><a href="benevole.php">Adhérant</a></li>
            <li><a href="evenements.php">Evenements</a></li>
            <li><a href="contact.php">Nous contacter</a></li>
            
        </ul>
        <a href="connexion.php" class="login_btn"><button>Connexion</button></a>
       
    </header>
<!-- section dons -->

<section id="materiel">
        <h1 class="section_title">Nos points de collecte</h1>
        <div class="images">
            <ul>
                <li class="point de collecte">
                   <div>
                       <img src="" alt="">
                   </div>
                   <span></span>
                   <span class="prix"></span>
                   <a href="#"></a>
                </li>
                <li class="point de collecte">
                    <div>
                        <img src="" alt="">
                    </div>
                    <span></span>
                    <span class="prix"></span>
                    <a href="#"></a>
                 </li>
                 <li class="point de collecte">
                    <div>
                        <img src="" alt="">
                    </div>
                    <span></span>
                    <span class="prix"></span>
                    <a href="#"></a>
                 </li>
                 <li class="point de collecte">
                    <div>
                        <img src="" alt="">
                    </div>
                    <span></span>
                    <span class="prix"></span>
                    <a href="#"></a>
                 </li>
                 <li class="point de collecte">
                    <div>
                        <img src="" alt="">
                    </div>
                    <span></span>
                    <span class="prix"></span>
                    <a href="#"></a>
                 </li>
                 <li class="point de collecte">
                    <div>
                        <img src="" alt="">
                    </div>
                    <span></span>
                    <span class="prix"></span>
                    <a href="#"></a>
                 </li>
            </ul>
        </div>
    </section>

    <section id="financier">
        <h1 class="section_title">Faire un don</h1>

        <h2></h2>

        <form action="/submit-donation" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        
            <label for="montant">Montant du don :</label>
            <input type="text" id="montant" name="montant" required>
        
            <label for="message">Message (optionnel) :</label>
            <textarea id="message" name="message" rows="4"></textarea>
        
            <input type="submit" value="Faire un don">
        </form>
        