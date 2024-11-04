<?php
require('connexion.php');
require('fonction.php');

// Vérifier si le paramètre 'image' est défini dans l'URL
if (isset($_GET['image'])) {
    // Récupérer l'identifiant de l'image depuis l'URL
    $image_id = $_GET['image'];

    // Récupérer les informations de la description
    $description_info = getDescriptionById($conn, $image_id);

    // Récupérer les images associées à la description
    $associated_images = getAssociatedImages($conn, $image_id);

} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description-site touristique</title>
    <link rel="stylesheet" href="style.css">
    <script src="dictionnaire.js"></script>
    <link rel="icon" type="image/x-icon" href=" images/icon-site.ico">
    <link rel="stylesheet" href="style.css">

</head>
<body class="detail-body">
    <header>
        <div><a href="sites.php" style="text-decoration:none ; font-size: 20px;">TourismeIvoire</a></div>
        <div>
            <ul>
                <li><a href="index.php">ACCUEIL</a></li>
                <li><a href="sites.php">SITES TOURISTIQUE</a></li>
                <li><a href="#description" style="font-weight: bold;" id="detailLink">DETAILS</a></li>
            </ul>
        </div>
        
    </header>
    <main>
        <div class="container-details">

            <p class="titre-propos" style="margin: 10px 0; font-size:20px; font-weight:700;" id="propos"><?php echo $description_info['titre']; ?></p>

            <div class="informations-site">
                <img src="<?php echo $description_info['image_url']; ?>" alt="Image affichée" width="100%" height="500px">
                <p class="image-desciption" style="line-height:30px" id="description"><?php echo $description_info['informations']; ?></p>
            </div>

            <div class="titre-photos">Images (<?php echo count($associated_images); ?>)</div>
            <div id="imagesAssociees">
                <p id="photo" style="margin: 20px 0; font-weight:700">
                    <?php foreach ($associated_images as $image_url): ?>
                        <img src="<?php echo $image_url; ?>" alt="Image associée" height="200" width="250" style="border-radius: 20px; margin-right: 20px; line-height: 20px;">
                    <?php endforeach; ?>
                </p> 
                <hr> <br>
            </div>
            <a href="visite.php?site=<?php echo $description_info['id']; ?>" id="visiterSiteButton" >Visiter le site</a>

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


    <!-- Inclure le lien vers le fichier JavaScript externe -->
    <script src="script_detail.js"></script>
</body>
</html>
