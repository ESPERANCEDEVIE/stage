<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esperance de vie</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
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
  <!-- section contact -->

  <section id="contact">
        
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5295.290565290134!2d1.4533658767364095!3d48.4249539311105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e40c818415dc65%3A0xd0aa10625ffa47ba!2s30%20Rue%20de%20la%20Paix%2C%2028600%20Luisant!5e0!3m2!1sfr!2sfr!4v1710465502810!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <form action="https://formspree.io/f/xayrbrjz"method="POST">
                    <label>
                        Votre email:
                        <input type="email" name="email">
                    </label>
                    <label>
                        Votre message:
                        <textarea name="message"></textarea>
                    </label>
  <!-- your other form fields go here -->
                    <input type="submit">
                </form>
            </div>
        </div>
    </section>
 

    <footer>
        <p> </p>
    </footer>