<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotatrip : En savoir plus</title>
    <link rel="stylesheet" href="stylesEnSavoirPlus.css">
    <link rel="stylesheet" href="stylesDark.css">
</head>

<body id="body" class="light-mode">
    <header>
        <nav class="light-mode" id="nav">
            <a href="index.php"><img src="icones/trône.svg" class="logo" alt="accueil"></a>
            <a href="index.php" class="lien light-mode" id="accueil">
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
    <main>
        <div class="conteneurImgAcc">
            <div class="img-entete-ensavplus"></div>
                <h2 class="ensavplus">En savoir plus.</h2>
            <h2 class="sloggan2 fondViolet light-mode">Vous aussi, partez en quête de nouveaux horizons.</h2>
        </div>
    </main>

    <script src="scriptEnSavoirPlus.js"></script>
    <script src="scriptDarkMode.js"></script>

</body>

</html>