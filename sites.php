<?php
require('connexion.php');
require("fonction.php");
$sites = getAllDescriptions($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Site touristique</title>
    <link rel="icon" type="image/x-icon" href=" images/icon-site.ico">
</head>

<body>
    
    <header>
        <div><a href="sites.php" style="text-decoration:none ; font-size: 20px;">TourismeIvoire</a></div>
        <div>
            <ul>
                <li><a href="index.php">ACCUEIL</a></li>
                <li><a id="touristiqueLink" href="sites.php">SITES TOURISTIQUE</a></li>
            </ul>
        </div>
    </header>

    
    <main>
        <div class="container-sites">
            <?php foreach ($sites as $index => $site): ?>
                <?php if ($index % 2 == 0): ?>
                    <div class="col-2">
                <?php endif; ?>
                
                <div class="element">
                    <div class="img-p" >
                        <a href="details.php?image=<?php echo $site['id']; ?>"><img src="<?php echo $site['image_url']; ?>" alt="" class="afficherImage"></a>
                        <p><?php echo $site['titre']; ?></p>
                    </div>
                    <div class="detail">
                        <?php echo substr($site['informations'], 0, 97) . '...'; ?>
                    </div>
                </div>

                <?php if ($index % 2 != 0 || $index == count($sites) - 1): ?>
                    </div> <!-- Fermeture de la div col-2 -->
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </main>




<!--            <div class="col-2">
                <div class="element Basilique">
                    <div class="img-p" >
                        <a href="details.html"?image="images/basilique.jpg"><img src="images/basilique.jpg" alt="" class="afficherImage"></a>
                        <p>La Basilique de Yamoussoukro</p>
                    </div>
                    <div class="detail">
                        La Basilique Notre-Dame de la paix de Yamoussoukro est la plus grande au monde...
                    </div>
                </div>

                <div class="element INP">
                    <div class="img-p" >
                        <a href="details.html"?image="images/inp-img.jpg"><img src="images/inp-img.jpg" alt="" class="afficherImage"></a>
                        <p>L'Institut National Polytechnique Houphouet-Boigny</p>
                    </div>
                    <div class="detail">
                        L'Institut National Polytechnique Houphouet-Boigny est une grande école publique située à Yamoussoukro.Elle compte...
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="element cascade">
                    <div class="img-p" >
                        <a href="details.html"?image="images/cascademan.jpg"><img src="images/cascademan.jpg" alt="" class="afficherImage"></a>
                        <p>Les Cascades naturelles de Man</p>
                    </div>
                    <div class="detail">
                        La ville de Man est un haut lieu du tourisme en 
                        Côte d'Ivoire grâce à ses nombreuses attractions
                    </div>
                </div>

                <div class="element dabou">
                    <div class="img-p" >
                        <a href="details.html"?image="images/fortdabou.jpg"><img  id="afficherImage" src="images/fortdabou.jpg" alt="" class="afficherImage"></a>
                        <p>Le fort de Dabou</p>
                    </div>
                    <div class="detail">
                        Ce batiment était à l'époque une sentinelle et un point important dans la stratégie millitaire de...
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="element FGBassam">
                    <div class="img-p" >
                        <a href="details.html"?image="images/francebassam.jpg"><img src="images/francebassam.jpg" alt="" class="afficherImage"></a>
                        <p>Quartier France de Grand-Bassam</p>
                    </div>
                    <div class="detail">
                        A Grand-Bassam en Côte d'Ivoire il existe un quartier atypique qui est le quartier France
                    </div>
                </div>
                <div class="element tisserand">
                    <div class="img-p" >
                        <a href="details.html"?image="images/tisserands.jpeg"></a><img src="images/tisserand.jpeg" alt="" class="afficherImage"></a>
                        <p>Les Tisserands de Waraniéné</p>
                    </div>
                    <div class="detail">
                        Situé à environ 5 km du centre ville de Korhogo ,le village de Waraniéné est célèbre pour ...
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="element zoo">
                    <div class="img-p" >
                        <a href="details.html"?image="images/ZooAbidjan.jpg"><img src="images/ZooAbidjan.jpg" alt="" class="afficherImage"></a>
                        <p> le Zoo National d’Abidjan</p>
                    </div>
                    <div class="detail">
                        Crée en 1972, le Zoo National d’Abidjan est une aire protégée située entre  les communes d’Abobo et Cocody. Il abrite trois groupes importants d’animaux, les mammifères, reptiles et les oiseaux.
                    </div>
                </div>

                <div class="element Fakaha">
                    <div class="img-p" >
                        <a href="details.html"?image="images/toilesfakaha.jpg"><img src="images/toilesfakaha.jpg" alt="" class="afficherImage"></a>
                        <p>Les toiles de Fakaha</p>
                    </div>
                    <div class="detail">
                        L'art Ivoirien dans toute sa diversité . <br>
                        Fakaha est un village du district des savanes
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="element banco">
                    <div class="img-p" >
                        <a href="details.html"?image="images/banco.jpg"><img src="images/banco.jpg" alt="" class="afficherImage"></a>
                        <p>Le Parc nationnal du banco</p>
                    </div>

                    <div class="detail">
                        Transformée en parc national depuis 1953, le banco est un massif forestier de 3474 hectares. Il s’agit d’une forêt dense avec des pistes où les feuilles s’entrelacent pour donner l’impression d’un tunnel. Une incursion dans ce lieu vous...
                    </div>
                </div>


                <div class="element Karité">
                    <div class="img-p" >
                        <a href="details.html"?image="images/karite.jpg"><img src="images/karite.jpg" alt="" class="afficherImage"></a>
                        <p>Le Beurre de karité de Korhogo</p>
                    </div>
                    <div class="detail">
                        Au quartier Petit-Paris de Korhogo ,la coopérative agricole Tcheregnimin...
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="element Niofouin">
                    <div class="img-p" >
                        <a href="details.html"?image="images/caseniofouin.jpeg"><img src="images/caseniofouin.jpeg" alt="" class="afficherImage"></a>
                        <p>La Case aux fetiches de Niofouin</p>
                    </div>
                    <div class="detail">
                        Le village de niofouin(niofoin) est l'un des plus pittoresques de la côte d'ivoire
                    </div>
                </div>

                <div class="element Perles">
                    <div class="img-p" >
                        <a href="details.html"?image="images/perlekapele.jpeg"><img src="images/perlekapele.jpeg" alt="" class="afficherImage"></a>
                        <p>Les Perles de Kapele</p>
                    </div>
                    <div class="detail">
                        A Kapele , monter des perles est tout un art . <br>
                        Les perles de Kapélé sont des bijoux made in Côte d'ivoire
                    </div>
                </div>

            </div>
       
            <div class="col-2">
                <div class="element aboukouamekro">
                    <div class="img-p" >
                        <a href="details.html"?image="images/aboumekro.jpg"><img src="images/aboumekro.jpg" alt="" class="afficherImage"></a>
                        <p>La Réserve de Faune d'Abokouamékro</p>
                    </div>
                    <div class="detail">
                        Au cœur du « V baoulé », la Réserve de Faune d'Abokouamékro (RFA) dresse fièrement ses nombreux atouts touristiques. Ceux-ci ont longtemps fait d'elle, la destination privilégiée des touristes de Yamoussoukro en quête de safari.                    
                    </div>
                </div>

                <div class="element Murailles">
                    <div class="img-p" >
                        <a href="details.html"?image="images/muraillessordi.jpeg"><img src="images/muraillessordi.jpeg" alt="" class="afficherImage"></a>
                        <p>Les murailles de Sordi</p>
                    </div>
                    <div class="detail">
                        Comme la grande muraille de Chine construite au 14ème siècle, le grand Nord Ivoirien a aussi sa ...
                    </div>
                </div>
            </div>


            <div class="col-2">
                <div class="element Vannier">
                    <div class="img-p" >
                        <a href="details.html"?image="images/vanierdetorgokaha.jpeg"><img src="images/vanierdetorgokaha.jpeg" alt="" class="afficherImage"></a>
                        <p>Les vanniers de Torgokaha</p>
                    </div>
                    <div class="detail">
                        Situé à 3Km  de Korhogo en venant de Napié , <br>Torgokaha est un villge d'artisans spécialisés...
                    </div>
                </div>

                <div class="element Roches">
                    <div class="img-p" >
                        <a href="details.html"?image="images/rochesshienlow.jpeg"><img src="images/rochesshienlow.jpeg" alt="" class="afficherImage"></a>
                        <p>Les roches sacrées de Shien Low</p>
                    </div>
                    <div class="detail">
                        Les roches sacrées de Shien Low sont situées à Nianbélégué...
                    </div>
                </div>

                
            </div>
            
            <div class="col-2">
                <div class="element Cathedrale">
                    <div class="img-p" >
                        <a href="details.html"?image="images/cathedraleFerke.jpeg"><img src="images/cathedraleFerke.jpeg" alt="" class="afficherImage"></a>
                        <p>Cathédrale Notre Dame de lourdes de Ferkessédougou</p>
                    </div>
                    <div class="detail">
                        Cathédrale Notre dame de Lourdes de <br>
                        Ferkessédougou ,très bel édifice se trouve dans...
                    </div>
                </div>

                <div class="element Granite">
                    <div class="img-p" >
                        <a href="details.html"?image="images/granite.jpeg"><img src="images/granite.jpeg" alt="" class="afficherImage"></a>
                        <p>La Carrière de granite de Korhogo</p>
                    </div>
                    <div class="detail">
                        La carrière de granite qui se situe aux abords de Korhogo , nous donne à la fois un ...
                    </div>
                </div>

            </div>
        
            <div class="col-2">
                <div class="element Mosquee de Kong">
                    <div class="img-p" >
                        <a href="details.html"?image="images/mosqueekong.jpg"><img src="images/mosqueekong.jpg" alt="" class="afficherImage"></a>
                        <p>Les mosquées de Kong</p>
                    </div>
                    <div class="detail">
                        Inscrites sur la liste du patrimoine culturel de l'Unesco ,en raison de leur très bonne conservat 
                    </div>
                </div>

                <div class="element botanique">
                    <div class="img-p" >
                        <a href="details.html"?image="images/jardinBinger.jpg"><img src="images/jardinBinger.jpg" alt="" class="afficherImage"></a>
                        <p>Le jardin botanique de bingerville</p>
                    </div>
                    <div class="detail">
                        Le Jardin botanique de Bingerville est un espace aménagé dans la Commune de Bingerville en Côte d'Ivoire, pour la conservation de plantes de diverses natures.
                    </div>
                </div>

            </div>
        -->


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
            <p class="copy" style="margin-left:20%">&copy; Copyright By Soro ,N'Guessan ,Yao Tous Droits reservés</p>
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


</main>

<script>
    document.getElementById("touristiqueLink").style.fontWeight="bold"
    const imageLinks = document.querySelectorAll(".afficherImage");
    //recherche tous les éléments HTML ayant la classe CSS "afficherImage" dans le document HTML actuel. Ces éléments sont des liens (balises <a>) entourant les images.
    
    /*imageLinks.forEach(function(link) {
        // itère sur tous les éléments trouvé
        link.addEventListener("click", function(event) {
            //lorsque l'utilisateur clique sur un de ces liens, la fonction à l'intérieur de addEventListener sera exécutée.
            event.preventDefault();
            //st utilisé pour empêcher le comportement par défaut du lien. Dans ce cas, il empêche le lien de naviguer vers une autre page lorsque l'utilisateur clique dessus. on veut que le code java script extrait d'abord le lien de l'image avant de le rediriger
            const imageUrl = this.getAttribute("src");
            //Nous extrayons le chemin de l'image en utilisant this.getAttribute("src"). "this" fait référence à l'élément HTML sur lequel l'utilisateur a cliqué, c'est-à-dire l'image. Nous utilisons getAttribute("src") pour obtenir la valeur de l'attribut "src" de l'image, qui est le chemin vers l'image.
            window.location.href = "details.html?image=" + imageUrl;
            //nous redirigeons l'utilisateur vers "affichage.html" avec le chemin de l'image en tant que paramètre d'URL. Cela signifie que l'URL ressemblera à "affichage.html?image=chemin_de_l_image.jpg", où "chemin_de_l_image.jpg" est le chemin de l'image que l'utilisateur a cliqué.
        });
    });*/
</script>

</body>
</html>

