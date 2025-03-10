<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotatrip : Nos packs de voyage</title>
    <link rel="stylesheet" href="stylePacks.css">
    <link rel="stylesheet" href="styleDark.css">
    <link rel="shortcut icon" type="image/png" href="icones/favicon.png" />
</head>

<body id="body" class="light-mode">
    <header>
    <nav class="light-mode" id="nav">
        <a href=#content class='skip-link'>Aller au contenu</a>
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
        <div class="conteneurImgAcc">
            <div class="img-entete-packs"></div>
            <h2 class="nosPacks">Nos packs de voyage.</h2>
        </div>
        <div class="textPacks">
            <h2 class="citationPacks  ecritureBeige light-mode " id='destination'>Un concept nouveau</h2>
            <p class="descrPacks">Nos packs de voyage vous permettent de visiter plusieurs lieux de tournage en même temps. Pour cela, nous prenons garde à ce que les lieux ne soient pas trop éloignés au niveau de leur localisation.
            Nous vous proposons alors un parcours adapté au pack choisi qui vous permettra, par l’intermédiaire de nos moyens de transport mis à disposition, d’aller d’une ville à l’autre afin de profiter un maximum des paysages inoubliables que vous allez rencontrer.
            </p>
        </div>
        
        <!-- <p class="newConcept fondViolet light-mode">Ceci étant un nouveau concept sur notre site, nous avons uniquement 3 packs différents à vous proposer à l’heure actuelle :</p> -->
        
        <?php
        include("connexion.php");
        $requete="SELECT * FROM destination WHERE package=1";
        $stmt=$db->query($requete);
        $result=$stmt -> fetchall(PDO::FETCH_ASSOC); //Je dis de récupérer les résultats sous forme de tableau associatif ac le FETCH_ASSOC
        foreach ($result as $row){
            echo "
            <h2 class='nomGOT'>{$row["nomGOT"]}</h2>
            <div class='fichePack fiche{$row["id_dest"]}'>
                        
                            <div class='photos ' data-position id='js-photos-{$row["id_dest"]}'>
                                <div class='blocimg blocimg{$row["id_dest"]}' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'></div>
                                <div class='blocimg  blocimg{$row["id_dest"]}' style='background-image:url(./images/{$row["id_dest"]}/2.jpg);'></div>
                                <div class='blocimg blocimg{$row["id_dest"]} img{$row["id_dest"]}' style='background-image:url(./images/{$row["id_dest"]}/3.jpg);'></div>   
                            </div>
                

                     <div class='text'>
                         <h2 class='pays ecritureBeige light-mode'>{$row["pays"]}</h2>
                          <div class='prixContainer'>
                             <img src='./icones/avionBlack.svg' class='avion' alt=''>
                             <h2 class='prix1 ecritureBeige light-mode'>{$row["prix"]}€</h2>
                         </div>
                         <a href='fichePack.php?pack={$row["id_dest"]}' class='button light-mode'>Voir plus</a>
                        
                        
                     </div>
                  </div>";
        }
        ?>
        <div class="divLienDest">
            <a href="destinations.php" class="lienDest">Voir toutes les destinations</a>
        </div>

    </main>


    <footer class="fondViolet light-mode">
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

    
    <script src="scriptPacks.js"></script>
    <script src="scriptDarkMode.js"></script>


         <!-- Inclusion des scripts via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>

    <script src="./animations/packs.js"></script>

</body>

</html>