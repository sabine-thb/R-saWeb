<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleConfirm.css">
    <link rel="stylesheet" href="styleDark.css">
    <title>Gotatrip</title>
    <link rel="shortcut icon" type="image/png" href="icones/favicon.png" />
</head>

<body id="body" class="light-mode">
    <header>
    <nav class="light-mode" id="nav">
            <a href="index.php" class="lien light-mode" id="accueil">
                <img src="./icones/trone.png" class="logo" alt="accueil">
                <h1 class="titreSite">Gotatrip</h1>
            </a>
            <ul class="menu">
                <li class="menuPrincipal">
                    <a href="./destinations.php" class="lien light-mode">Nos destinations</a>
                </li>
                <li class="menuPrincipal">
                    <a href="packs.php" class="lien light-mode">Nos packs</a>
                </li>
                <li class="menuPrincipal">
                    <a href="./enSavoirPlus.php" class="lien light-mode">En savoir plus</a>
                </li>
                <li class="menuPrincipal">
                    <button type="button" name="menuBurger" class="burgerButton light-mode">
                        <img src="./icones/menuBlackBurger" class="burger light-mode" alt="menu">
                    </button>
                </li>
                <li>
                    <button type="button" name="dark_light" class="mode light-mode" id="button" title="Toggle dark/light mode">
                        <img src="./icones/moonWhite.svg" class="moon" alt="mode sombre">
                    </button>
                </li>
            </ul>
            <ul class="menuBurger light-mode">
                <li>
                    <a href="./destinations.php" class="lien light-mode">Nos destinations</a>
                </li>
                <li>
                    <a href="packs.php" class="lien light-mode">Nos packs</a>
                </li>
                <li>
                    <a href="./enSavoirPlus.php" class="lien light-mode">En savoir plus</a>
                </li> 
            </ul>
        </nav>
    </header>

    <main>
    <?php
        include("connexion.php");

        //Je veux récup&érer les infos sur la destination concernée

        //je récupère les éléments de mon formulaire que j'insère dans ma base de données

        $id_dest=$_GET["id_dest"];
        $destination=$_GET["destination"];
        $nom=$_GET["nom"];
        $prenom=$_GET["prenom"];
        $nombreBillets=$_GET["nombre-billets"];
        $date=$_GET["date"];
        $mail=$_GET["mail"];

        $prixIndividuel=$_GET["prixIndividuel"];

        $total=$nombreBillets*$prixIndividuel;


        $requete1="INSERT INTO clients (nom, prenom, mail) VALUES ('$nom','$prenom','$mail')";
        $db->query($requete1);

        $requete2="INSERT INTO reservation (dateResa,quantité,prenom_ext,dest_ext) VALUES ('$date','$nombreBillets','$prenom','$destination')";
        $db->query($requete2);



        //J'envoie un mail de confirmation à la personne qui réserve et à moi-même en tant que créatruce du site

        $message="Merci $prenom pour ta commande chez Gotatrip !
        Ton avion partira le $date pour $destination.
        Quantité de billets : $nombreBillets.
        Total : $total €";
           
                 
        $to=$mail;

        $subject="Votre réservation chez Gotatrip";

        $messageProprio="$prenom $nom a réservé $nombreBillets billet(s) pour $destination. Son avion partira le $date.
        Il/elle en a eu pour $total €. ";

        $mailProprio="sabine.thibout@edu.univ-eiffel.fr";

        $subject2="Réservation Gotatrip";

        mail($to, $subject, $message);

        mail($mailProprio, $subject2, $messageProprio);

     



        if (isset($_GET["soumettre"])){
            echo"
            

            <a href='index.php' class='button'>Retour à l'accueil</a>
            <div class='msgConfirmContainer'>
                <h2 class='msgConfirm'>Merci pour votre réservation ! Un mail récapitulatif vous a été envoyé.</h2>
            </div>
            
            ";
        }



     



    ?>

    </main>
    <footer class="footer fondViolet light-mode">
        <div class="footerPartGauche">
            <div class="footerContainer1">
                <img src="./icones/trone.png" alt="" class="footerTrone">
                <h1 class="titreFooter ecritureBeige light-mode">Gotatrip</h1>
            </div>
            <p class="footerDescription">Gotatrip est un site qui vous permet de réserver des billets d’avion pour vous envoler vers les lieux de tournage de la série culte Game Of Thrones. Vous pourrez découvrir certains paysages extraordinaires d’Essos ou de Westeros après avoir choisi la destination qui vous fait le plus rêver.</p>
        </div>

        <div class="footerPartDroite">
            <div class="plan">
                <h2 class=" sTitreFooter ecritureBeige light-mode">Plan du site</h2>
                <a href="destinations.php" class="lienFooter">Nos destinations</a>
                <a href="packs.php" class="lienFooter">Nos packs</a>
                <a href="enSavoirPlus.php" class="lienFooter">En savoir plus</a>
            </div>

            <div class="savPlus">
                <h2 class=" sTitreFooter ecritureBeige light-mode">En savoir plus</h2>
                <a href="enSavoirPlus.php#concept" class="lienFooter">Le concept</a>
                <a href="enSavoirPlus.php#creatrice" class="lienFooter">La créatrice</a>
                <a href="enSavoirPlus.php#mentionsLegales" class="lienFooter">Mentions légales</a>
            </div>
        </div>

    </footer>
   
   
    
    <script src="scriptDarkMode.js"></script> 
</body>
</html>


