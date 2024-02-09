
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
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
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="v_dons.php">Dons</a></li>
            <li><a href="v_inscription.php">Adhérant</a></li>
            <li><a href="v_évenements.php">Evenements</a></li>
            <li><a href="v_contact.php">Nous contacter</a></li>
        </ul>
       <a href="views/v_connexion.php"><button class="login_btn">Connexion</button></a>
    </header>
    <!--  Acceuil -->
     
    <section id="home">
        <div class="left">
            <h1>Qui <span>sommes</span> nous?</h1>
            <p>Esperance de vie à pour but de subvenir aux besoins élémentaire des enfants (aide alimentaire, secours financiers, hébergement, soins, éducation...).Ce projet de construction d'orphelinat à Pointe Noire au Congo a pour but de participer à la lutte contre la pauvreté, d'atténuer les effets dévastateurs des grandes pandémies, à travers la création de cadres propices à l’épanouissement des enfants, de permettre l'insertion des enfants dans la société.
Pour atteindre ce but nous avons besoins de votre soutient financier et aussi matérielle, nous avons besoins des dons.
l'association espérance de vie s'interdit toute discrimination dans l'organisation et la vie de l'association. Elle s'interdit également toute manifestation présentant un caractère politique, confessionnel ou syndical. Elle veille au respect de ces principes et garantit la liberté de conscience de ses membres.</p>
            <a href="#">Faire un don!</a>
        </div>
        <div class="right">
            <img src="images/photo_acceuil.jpg">
        </div>
    </section>




    <!-- section dons -->

    <section id="dons">
        <h1 class="section_title">Nos points de collecte</h1>
        <div class="images">
            <ul>
                <li class="car">
                   <div>
                       <img src="" alt="">
                   </div>
                   <span></span>
                   <span class="prix"></span>
                   <a href="#"></a>
                </li>
                <li class="car">
                    <div>
                        <img src="" alt="">
                    </div>
                    <span></span>
                    <span class="prix"></span>
                    <a href="#"></a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="" alt="">
                    </div>
                    <span></span>
                    <span class="prix"></span>
                    <a href="#"></a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="" alt="">
                    </div>
                    <span></span>
                    <span class="prix"></span>
                    <a href="#"></a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="" alt="">
                    </div>
                    <span></span>
                    <span class="prix"></span>
                    <a href="#"></a>
                 </li>
                 <li class="car">
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

    <!-- section adhérant -->

    <section id="adhérant">
        <h1 class="section_title">Devenir Bénévole</h1>
        <div class="list_adhérant">
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3></h3>
                <p></p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3></h3>
                <p></p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3></h3>
                <p></p>
                 <a href="#" class="read_more">Lire Plus</a>
            </div>
        </div>
    </section>
    

    <!-- section contact -->

    <section id="contact">
        <h1 class="section_title">Nous contacter</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://maps.app.goo.gl/E939hmvicnyS2PDr9" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

    <script>
        //menu responsive code JS

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