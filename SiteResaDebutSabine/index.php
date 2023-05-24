<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesDark.css">
    <title>Gotatrip site-réservation</title>
    <link rel="shortcut icon" type="image/png" href="" />
    <!-- Ne pas oublier de mettre un favicon et de transformer le logo en favicon via un convertisseur -->
</head>

<body id="body" class="light-mode">
    <header>
        <nav class="light-mode" id="nav">
            <a href="index.php" class="lien light-mode" id="accueil">
                <img src="./icones/trône.svg" class="logo" alt="accueil">
                <h1>Gotatrip</h1>
            </a>
            <ul class="menu">
                <li>
                    <a href="./destinations.php" class="lien light-mode">Nos destinations</a>
                </li>
                <li>
                    <a href="./enSavoirPlus.php" class="lien light-mode">En savoir plus</a>
                </li>
                <li>
                    <a href="" class="lien light-mode">Mon panier</a>
                </li>
                <li>
                    <img src="./icones/menuBlackBurger" class="menuBurger light-mode" alt="menu">
                </li>
                <li>
                    <button type="button" name="dark_light" class="mode light-mode" id="button"
                        title="Toggle dark/light mode"><img src="./icones/moon1.svg" class="moon"
                            alt="mode sombre"></button>
                </li>
            </ul>
        </nav>
    </header>
    <div class="js-slider">
        <div class="js-photos">
            <!-- CLONE PRÉSENT AU DÉBUT DU SLIDER, VISUELLEMENT IDENTIQUE À LA SLIDE RÉELLE 3 -->
            <div class="photoslider clone three">
            </div>
            <!-- LES 3 SLIDES RÉELLES -->
            <div class="photoslider reel one">
            </div>
            <div class="photoslider reel two">
            </div>
            <div class="photoslider reel three">
            </div>
            <!-- CLONE PRÉSENT À LA FIN DU SLIDER, VISUELLEMENT IDENTIQUE À LA SLIDE RÉELLE 1 -->
            <div class="photoslider clone one">
            </div>
        </div>
    </div>
    <h2 class="description">Venez découvrir les lieux de tournage époustouflants de votre série culte en réservant
        une de ces multiples excursions aux 4 coins du monde.</h2>
    <div class="slogg">
        <h2 class="sloggan">Westeros vous attend.</h2>
    </div>


    <footer>

    </footer>


    <script src="script.js"></script>
    <script src="scriptDarkMode.js"></script>
</body>

</html>