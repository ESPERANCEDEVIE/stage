<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esperance de vie</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <script src="js/img.js"></script>
</head>
<body>
    
    <!-- barre de nav  -->
    <header>
      
        
      <div class="menu_toggle">
          <span></span>
      </div>

      <div class="logo">
          <a href="sfonction.php?uc=acceuil_co&action=afficher"  ><span>Esperance</span><span> de</span> <span> Vie </span> </a>
      </div>
      <ul class="menu">
          <li><a href="sfonction.php?uc=acceuil_co&action=afficher">Accueil</a></li>
          <li class="dropdown">
              <a href="" class="dropbtn">Faire un don</a>
              <div class="dropdown-content">
                  <a href="sfonction.php?uc=materiel_co&action=afficher">Matériel</a>
                  <a href="https://www.paypal.com/donate/?hosted_button_id=LN42QE7HSJ7MC">Financier</a>
              </div>
          </li>
          
          <li><a href="sfonction.php?uc=evenements_co&action=afficher">Evenements</a></li>
          <li><a href="sfonction.php?uc=contact_co&action=afficher">Nous contacter</a></li>
          
      </ul>
      <H2><?php echo "Bonjour, $prenom!" ?></H2><a href="sfonction.php?uc=deconnexion&action=deconnexion" class="login_btn"><button>Deconnexion</button></a> 
     
  </header>
    <!--  Acceuil -->
     
    <section id="home">
        <div class="left">
            <h1><span>Qui </span><span>sommes</span><span> nous?</span></h1>
            <p>Esperance de vie à pour but de subvenir aux besoins élémentaire des enfants (aide alimentaire, secours financiers, hébergement, soins, éducation...).Ce projet de construction d'orphelinat à Pointe Noire au Congo a pour but de participer à la lutte contre la pauvreté, d'atténuer les effets dévastateurs des grandes pandémies, à travers la création de cadres propices à l’épanouissement des enfants, de permettre l'insertion des enfants dans la société.
                Pour atteindre ce but nous avons besoins de votre soutient financier et aussi matérielle, nous avons besoins des dons.
                l'association espérance de vie s'interdit toute discrimination dans l'organisation et la vie de l'association. Elle s'interdit également toute manifestation présentant un caractère politique, confessionnel ou syndical. Elle veille au respect de ces principes et garantit la liberté de conscience de ses membres.</p>
            <a href="financier.php">Faire un don!</a>
        </div>
        <div class="right">
        <div id="slider">
        <img src="images/image1.jpg" alt="image1" id="slide" class="rounded-image" slide="ChangeSlide()" >
    </div>
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