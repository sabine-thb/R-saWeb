<?php 

include("connexion.php");
$requete="SELECT * FROM destination WHERE id_dest=1";
$stmt=$db->query($requete);
$result=$stmt -> fetchall(PDO::FETCH_ASSOC);

if(isset($_GET["dest"])){
    $dest = $_GET["dest"];
}
else{
    $dest = "1";
}

$requete="SELECT * FROM destination WHERE id_dest=$dest";
$stmt=$db->query($requete);
$result=$stmt-> fetchall(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFormulaire.css">
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

<?php foreach ($result as $row){
    echo " <div class='retourContainer'>
                <a href='ficheDest.php?dest={$row["id_dest"]}' class='retourDest'>Retour à la fiche destination</a>
           </div>
    
    <div class='formContainer' style='background-image:url(images/{$row["id_dest"]}/2.jpg);''>
                <form action='insert_resa.php' method='GET'>
                    <h2 class='recap'>Réservation : {$row["nomGOT"]}, {$row["nomReel"]} </h2>
                    <input type='hidden' name='destination' value='{$row["nomReel"]}'>
                    <input type='hidden' name='id_dest' value='{$row["id_dest"]}'>
                    <input type='hidden' name='prixIndividuel' value='{$row["prix"]}'>
                    <p>
                        <label for='nom'>Nom* :</label>
                        <input id='nom' name='nom' required>
                    </p>
                    <p>
                        <label for='prenom'>Prénom* :</label>
                        <input id='prenom' name='prenom'required>
                    </p>
                    <p>
                    <label for='nombre-billets'>Nombre de billets* :</label>
                    <button class='decrement qteTotale' type='button'>-</button>
                    <input id='nombre-billets' name='nombre-billets' type='number' min='1' max='10' required>
                    <button class='increment qteTotale' type='button'>+</button>
                    </p>
                    <p>
                      <label for='date'>Date du vol* :</label>
                      <input id='date' name='date' type='date' required>
                    </p>
                    <p>
                      <label for='mail'>Mail* :</label>
                      <input id='mail' name='mail' type='email' required>
                    </p>
                    <p class='champsObligatoires'>*Tous les champs sont obligatoires</p>
                     
                    
                    <h3 class='total'>Total : <span id='prixTotal'></span></h3>
                    <input type='submit' value='Je réserve' class='reserve' name='soumettre'> 
                   
                   <script>
                        var prixInitial ={$row["prix"]};
                  </script>  
                </form>
            </div>
        </div>";} ?>


</body>
<script src="scriptFormulaire.js"></script>
<script src="scriptDarkMode.js"></script>