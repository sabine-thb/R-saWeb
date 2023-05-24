<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotatrip: nos destinations</title>
    <link rel="stylesheet" href="styleDestinations.css">
    <link rel="stylesheet" href="styleDark.css">
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
        <div class="img-entete-dest">
            <h2 class="nosDest">Nos destinations.</h2>
        </div>
        <h2 class="citationDestinations fondViolet light-mode">Prêts à vivre cette histoire vous même ?</h2>

        <div class="toutesDest">
        <?php
        include("connexion.php");
    

        
        // Récupérer la valeur de recherche depuis l'URL
        $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
        $triPrix=isset ($_GET['prix']) ? $_GET['prix'] : '';

        // Construire la requête SQL en fonction de la recherche
        if ($searchQuery !== '') {
            $requete = "SELECT * FROM destination WHERE package=0 AND (nomGOT LIKE '%$searchQuery%' OR nomreel LIKE '%$searchQuery%'
            OR pays LIKE '%$searchQuery%') ";
        } else {
            $requete = "SELECT * FROM destination WHERE package=0";
        }


        

        if ($triPrix == "pasCher") {
            $requete .= " AND (prix<100) ";
        } 

        if ($triPrix == "moyen") {
            $requete .= " AND (prix>100) AND (prix<200) ";
        } 

        if ($triPrix == "cher") {
            $requete .= " AND (prix>200) ";
        } 


     

    $stmt = $db->query($requete);
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        foreach ($result as $row){
            echo "<div class='ficheDest backgroundFiche dark-mode'>
                        
                        <div class='js-slider'>
                            <div class='js-photos imgContainer' data-position id='js-photos-{$row["id_dest"]}' >
                                <div class='blocimg' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'></div>
                                <div class='blocimg' style='background-image:url(./images/{$row["id_dest"]}/2.jpg);'></div>
                            </div>
                            <div class='js-navigation'>
                                <button class='js-btn-decale-gauche'>
                                    <span class='arrow' id='f{$row["id_dest"]}'></span>
                                </button>
                            </div>
                        </div>

                        <div class='text'>
                            <h3 class='nomGOT'>{$row["nomGOT"]}</h3>
                            <h3 class='vraiNom ecritureBeige dark-mode'>{$row["nomReel"]}, {$row["pays"]}</h3>
                            <p class='descrCourt'>{$row["descriptifCourt"]}</p>
                            <a href='{$row["id_dest"]}.php'class='enSavPlus dark-mode '>En savoir plus sur le lieu de séjour</a>
                            <div class='prixContainer'>
                                <img src='./icones/avionBlack.svg' class='avion' alt=''>
                                <h2 class='prix1 ecritureBeige dark-mode'>{$row["prix"]}€</h2>
                            </div>
                        </div>
                    </div>";
        }

        if (count($result) === 0) {
            echo "<div class='erreurContainer'>
                        <div class='imgErreur'></div>
                        <h3 class='msgErreur'>Aucune destination ne correspond à votre recherche.</h3>
                    </div>
                    <div class='retourAcc'>
                        <a href='index.php' class='lienAcc'>Retour à la page d'accueil</a>
                    </div>";
        }

        ?>

        </div>
        <div class="divLienPacks">
            <a href="packs.php" class="lienPacks">Voir les packs de voyage</a>
        </div>

        <!-- <img src='images/{$row["id_dest"]}/1.jpg' class='imgDest'alt=''> -->

    </main>
    <footer class="fondViolet light-mode">
        <div class="footerPartGauche">
            <div class="footerContainer1">
                <img src="./icones/trone.svg" alt="" class="footerTrone">
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
    
    
    <script src="scriptDestinations.js"></script>
    <script src="scriptDarkMode.js"></script> 
</body>
</html>