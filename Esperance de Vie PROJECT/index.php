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
            <li><a href="#home">Accueil</a></li>
            <li class="dropdown">
                <a href="dons.php" class="dropbtn">Faire un don</a>
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
    <!--  Acceuil -->
     
    <section id="home">
        <div class="left">
            <h1><span>Qui </span><span>sommes</span><span> nous?</span></h1>
            <p>Esperance de vie à pour but de subvenir aux besoins élémentaire des enfants (aide alimentaire, secours financiers, hébergement, soins, éducation...).Ce projet de construction d'orphelinat à Pointe Noire au Congo a pour but de participer à la lutte contre la pauvreté, d'atténuer les effets dévastateurs des grandes pandémies, à travers la création de cadres propices à l’épanouissement des enfants, de permettre l'insertion des enfants dans la société.
                Pour atteindre ce but nous avons besoins de votre soutient financier et aussi matérielle, nous avons besoins des dons.
                l'association espérance de vie s'interdit toute discrimination dans l'organisation et la vie de l'association. Elle s'interdit également toute manifestation présentant un caractère politique, confessionnel ou syndical. Elle veille au respect de ces principes et garantit la liberté de conscience de ses membres.</p>
            <a href="#materiel">Faire un don!</a>
        </div>
        <div class="right">
            <img src="images/image acceuil site.jpg">
        </div>
    </section>




    <script>
     

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>
</body>
</html>