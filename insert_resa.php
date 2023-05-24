<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleConfirm.css">
    <link rel="stylesheet" href="styleDark.css">
    <title>Gotatrip</title>
    <link rel="shortcut icon" type="image/png" href="" />
    <!-- Ne pas oublier de mettre un favicon et de transformer le logo en favicon via un convertisseur -->
</head>

<body id="body" class="light-mode">
    <header>
        <nav class="light-mode" id="nav">
            <a href="index.php"><img src="icones/trone.svg" class="logo" alt="accueil"></a>
            <a href="index.php" class="lien light-mode" id="accueil">
                <h1 class="titreSite">Gotatrip</h1>
            </a>
            <ul class="menu">
                <li>
                    <a href="./destinations.php" class="lien light-mode">Nos destinations</a>
                </li>
                <li>
                    <a href="packs.php" class="lien light-mode">Nos packs</a>
                </li>
                <li>
                    <a href="./enSavoirPlus.php" class="lien light-mode">En savoir plus</a>
                </li>
                <li>
                    <img src="./icones/menuBlackBurger" class="menuBurger light-mode" alt="menu">
                </li>
                <li>
                    <button type="button" name="dark_light" class="mode light-mode" id="button"
                        title="Toggle dark/light mode"><img src="./icones/moonWhite.svg" class="moon"
                            alt="mode sombre"></button>
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

        

        $requete1="INSERT INTO clients (nom,prenom,mail) VALUES ('$nom','$prenom','$mail')";
        $db->query($requete1);

        $requete2="INSERT INTO reservation (dateResa,quantité,prenom_ext,dest_ext) VALUES ('$date','$nombreBillets','$prenom','$destination')";
        $db->query($requete2);



        if (isset($_GET["soumettre"])){
            echo"
            
            <div class='retourContainer'>
                <a href='index.php' class='retour'>Retour à l'accueil</a>
            </div>
            <div class='msgConfirmContainer'>
                <h2 class='msgConfirm'>Merci pour votre réservation ! Un mail récapitulatif vous a été envoyé.</h2>
            </div>
            
            ";
        }



        // $message="blabla";
        // $to=$_mail;
        // $subject="Votre réservation chez Gotatrip";

        // mail($to, $subject, $message);



    ?>

    </main>
   
   
    
    <script src="scriptDarkMode.js"></script> 
</body>
</html>


