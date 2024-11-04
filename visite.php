<?php
require('connexion.php');
require('fonction.php');

// Vérifier si le paramètre 'site' est défini dans l'URL
if (isset($_GET['site'])) {
    // Récupérer l'identifiant de l'site depuis l'URL
    $site_id = $_GET['site'];

    // Récupérer les informations de la description
    $description_info = getDescriptionById($conn, $site_id); // Utilisez la connexion $conn

} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="dictionnaire.js"></script>
    <link rel="icon" type="image/x-icon" href=" images/icon-site.ico">
</head>
<body class="visite-body">

    <header>
        <div class="logo">
            <div><a href="sites.php" style="text-decoration:none ; font-size: 20px;">TourismeIvoire</a></div>
        </div>
        <div>
            <ul>
                <li><a href="index.php">ACCUEIL</a></li>
                <li><a href="sites.php">SITES TOURISTIQUE</a></li>
                <li><a href="#siteTitle" style="font-weight: 600;" id="visitelLink ">VISITE</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="container-visite">
                <h2 id="visiteTitle"> <?php echo isset($description_info['titre']) ? $description_info['titre'] : 'Titre non disponible'; ?></h2>
                <p id="prix"> <?php echo isset($description_info['prix']) ? 'Prix : ' . $description_info['prix'] . ' FCFA/personne' : 'Prix non disponible'; ?></p>
                <label for="nbrePerson" id="nbrePlace">Nombre de personnes</label>
                <input id="nbrePerson" type="number" value="1" min="1">
                <div class="voirLePrix">
                    <button onclick="voirPrix()">Voir le prix</button>
                    <p id="resultatPrix" style="margin-bottom: 10px;"></p>
                </div>
            </div>
            
        </div>
    </main>
    
    <footer>
        <div class="left">
            <p>
                <img src="images/contact.png" alt="" width="25px" style="margin-right :10px;"> 
                0646829308/0152999640
            </p>
            <p>
                <img src="images/email.png" alt="" width="25px" style="margin-right :10px;">
                <a href="https://gmail.com/">nguessanaxel@gmail.com</a>
            </p>
        </div>
        <div class="center">
            <hr>
            <p style="margin-left:20%">&copy; Copyright By Soro ,N'Guessan ,Yao Tous Droits reservés</p>
        </div>
        <div class="right">
            <p>
                <span><img src="images/insta.png" width="30px"></span>
                <a href="#">Instagram</a>
            </p>
            <p>
                <span><img src="images/twiter.png" width="30px" alt=""></span>
                <a href="#">Twitter</a>
            </p>
            <p>
                <span><img src="images/facebook.png" width="30px" alt=""></span>
                <a href="#">Facebook</a>
            </p>
            <p> 
                <span><img src="images/whatsapp.png" width="30px" alt=""></span>
                <a href="#">Whatsapp</a>
            </p>
        </div>
    </footer>

    <script>
        function voirPrix() {
            var nbrePerson = document.getElementById("nbrePerson").value;
            var prixUnitaire = <?php echo isset($description_info['prix']) ? $description_info['prix'] : 0; ?>;
            var resultatPrix = nbrePerson * prixUnitaire;
            document.getElementById("resultatPrix").innerHTML = "Prix total : " + resultatPrix + " FCFA";
        }
    </script>
</body>
</html>
