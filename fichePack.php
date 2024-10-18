<?php 

include("connexion.php");
$requete="SELECT * FROM destination WHERE id_dest=1";
$stmt=$db->query($requete);
$result=$stmt -> fetchall(PDO::FETCH_ASSOC);

if(isset($_GET["pack"])){
    $pack = $_GET["pack"];
}
else{
    $pack = "1";
}

$requete="SELECT * FROM destination WHERE id_dest=$pack";
$stmt=$db->query($requete);
$result=$stmt-> fetchall(PDO::FETCH_ASSOC);



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFiche.css">
    <link rel="stylesheet" href="styleDark.css">
    <title>Gotatrip</title>
    <link rel="shortcut icon" type="image/png" href="icones/favicon.png" />
</head>

<body id="body" class="light-mode">
    <header>
    <nav class="light-mode" id="nav">
        <a href=#nomPack class='skip-link'>Aller au contenu</a>
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

            foreach ($result as $row){
                echo "
                    <div class='ficheDest'>
                        <a href='destinations.php' class='lienRetour'>
                            <img src='' class='retour light-mode' alt='retour'>
                        </a>
                        <div class='photos'>
                            <div class='photoPrincipale' style='background-image:url(./images/{$row["id_dest"]}/1.jpg');></div>
                            <div class='petitesPhotos'>
                                <div class='petite p1' style='background-image:url(./images/{$row["id_dest"]}/2.jpg);'></div>
                                <div class='petite p2' style='background-image:url(./images/{$row["id_dest"]}/3.jpg);'></div>
                                <div class='petite p3' style='background-image:url(./images/{$row["id_dest"]}/4.jpg);'></div>
                            </div>
                        </div>
                        <div class='texte'>
                            <h2 class='nomGOT' id='nomPack'>{$row["nomGOT"]}</h2>
                            <h3 class='vraiNom ecritureBeige dark-mode'>{$row["nomReel"]}, {$row["pays"]}</h3>
                            <div class='reservation'>
                            <div class='prixContainer'>
                                <img src='./icones/avionBlack.svg' class='avion' alt=''>
                                <h2 class='prix ecritureBeige dark-mode'>{$row["prix"]}€</h2>
                            </div>
                            <a href='formulaire.php?dest={$row["id_dest"]}' class='button '>Je réserve</a>
                        </div>
                            <p class='descrLong'>{$row["descriptifLong"]}</p>
                            ";}?>

                            <div class='containerDestAssoc'>

                            <?php 
                            $requete2="SELECT * FROM destination WHERE parent_ID=$pack";
                            $stmt2=$db->query($requete2);
                            $result2=$stmt2-> fetchall(PDO::FETCH_ASSOC);

                            foreach ($result2 as $row){
                                echo"

                            
                                <a href='ficheDest.php?dest={$row["id_dest"]}' class='button' >{$row["nomGOT"]}</a>
                            ";}?>

                            </div>
                            
                        <?php 
                            $requete="SELECT * FROM destination WHERE id_dest=$pack";
                            $stmt=$db->query($requete);
                            $result=$stmt-> fetchall(PDO::FETCH_ASSOC);
                            foreach ($result as $row){
                                echo"
                        </div>
                    </div>
                    <div>
                        
                        
                    </div>";} ?>
                        
                 
                    
                   
            

           

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





    <script src ="scriptFiche.js"></script>
    <script src="scriptDarkMode.js"></script>
</body>