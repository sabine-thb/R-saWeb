<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotatrip: nos destinations</title>
    <link rel="stylesheet" href="stylesDestinations.css">
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
        <div class="img-entete-dest">
            <h2 class="nosDest">Nos destinations.</h2>
        </div>
        <h2 class="citationDestinations fondViolet light-mode">Prêts à vivre cette histoire vous même ?</h2>

        <?php
        include("connexion.php");
        $requete="SELECT * FROM destination";
        $stmt=$db->query($requete);
        $result=$stmt -> fetchall(PDO::FETCH_ASSOC); //Je dis de récupérer les résultats sous forme de tableau associatif ac le FETCH_ASSOC
        foreach ($result as $row){
            echo "<div class='ficheDest'>
                     <div class='blocimg' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'>
                     </div>
                     <div>
                        <h1>{$row["nomGOT"]}</h1>
                        <h2>{$row["nomReel"]}</h2>
                        <p>{$row["descriptifCourt"]}</p>
                        <a>En savoir plus sur les lieux de séjour</a>
                        <h2>{$row["prix"]}€</h2>
                     </div>
                  </div>";
        }
        ?>

        <!-- <img src='images/{$row["id_dest"]}/1.jpg' class='imgDest'alt=''> -->

    </main>
    
    
    <script src="scriptDestinations.js"></script>
    <script src="scriptDarkMode.js"></script> 
</body>
</html>