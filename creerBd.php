<?php

function  creerTables($conn){
    $database = "site";
    $conn->select_db($database);
    // Créer la table descriptions si elle n'existe pas
    $conn->query("CREATE TABLE IF NOT EXISTS descriptions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        image_url VARCHAR(255) NOT NULL,
        informations TEXT NOT NULL,
        titre VARCHAR(255) NOT NULL,
        prix INT NOT NULL
    )");

    // Créer la table images_associees si elle n'existe pas
    $conn->query("CREATE TABLE IF NOT EXISTS images_associees (
        id INT AUTO_INCREMENT PRIMARY KEY,
        description_id INT,
        image_url VARCHAR(255) NOT NULL,
        FOREIGN KEY (description_id) REFERENCES descriptions(id)
    )");
}


function preRemplirTable($conn){
    $database = "site";
    $conn->select_db($database);
    $conn->query("INSERT INTO descriptions (image_url, informations, titre, prix) VALUES 
    ('images/cascademan.jpg', 'La ville de Man est un haut lieu du tourisme en Côte d\'ivoire grâce à ses nombreuses attractions touristiques dont celles de ses cascades naturelles.<br>L\'une des plus visitées de la région est la cascade naturelle de Zadepleu, située à 3 kilomètres de Man, route du Mont Tonkpi. Issue d\'une rivière à débit variable, elle s\'écoule sur une hauteur de 20 mètres environ et constitue un magnifique lieu de repos sous les grands arbres.<br>Man compte également d\'autres cascades comme celle de Glongouin située au pied de la Dent de Man, celle de Goba qui se trouve sur la route de Danané ainsi que la cascade de Deoule très peu connue. Ces cascades en escalier créent des paysages naturels impressionnants avec des séquences de plusieurs petites chutes d\'eau. Très prisées, les cascades de Man sont fréquentées par ceux qui viennent chercher un peu de fraîcheur en plongeant dans leurs piscines naturelles.<br>À l\'entrée des cascades de Man pour y avoir accès, vous devez vous acquitter d\'une somme de 200 ou de 300 francs/personne.', 'Les cascades de Man', 200),

    ('images/fortdabou.jpg', 'Ce bâtiment était à l\'époque une sentinelle et un point important dans la stratégie militaire de la France.<br>Le fort de Dabou fut construit par le commandant FAIDHERBE en 1853, suite à l\'expédition du contre-amiral BAUDIN, qui commandait l\'escadre des côtes occidentales d\'Afrique. <br>Après la défaite française contre la Prusse en 1871, le gouvernement rappela la garnison qui se tenait à Dabou. Arthur VERDIER, devenu le nouveau résident de France, laissa le fort de Dabou à l\'abandon et en état de délabrement jusqu\'en 1893. Cette année-là, le général Louis Gustave Binger arrive en Côte d\'Ivoire et décide de le réhabiliter.<br>Dabou devint un des postes administratifs du littoral, servant de bureau des douanes et également de garnison à 125 miliciens.<br>À sa suite, plusieurs administrateurs et personnalités lui succèdent et résident au Fort.<br>Puis le 11 juillet 1899 arrivèrent les Sœurs Notre Dame des Apôtres pour fonder une école en internat d\'une quinzaine de jeunes filles, dite \'l\'école des fiancées\' où il était dispensé un enseignement préparant ces jeunes filles au mariage. Cette école des sœurs fonctionnera jusqu\'en 1913.<br>Un large escalier de pierre vous accueille jusqu\'à la porte du fort. Le mur d\'enceinte a six mètres de hauteur et se développe sur les quatre faces d\'un carré ayant environ quarante mètres de côté deux vieux canons napoléoniens postés au sommet du FORT rappelant la lutte acharnée des colons Français à protéger leur acquis de la convoitise des autres explorateurs.<br>Aujourd\'hui, il ne reste plus que quelques vestiges qui rappellent le glorieux passé du fort de Dabou.', 'le fort de dabou', 2000),

    ('images/basilique.jpg', 'La Basilique de Notre-Dame de la Paix, située à Yamoussoukro, la capitale politique de la Côte d\'Ivoire, est l\'une des plus grandes églises du monde et est souvent considérée comme la plus grande basilique au monde. Construits à la demande du président ivoirien Félix Houphouët-Boigny, les travaux ont débuté en 1986 et ont duré plusieurs années.</br> L\'architecture de la basilique est inspirée de la basilique Saint-Pierre du Vatican à Rome, présentant une structure néo-byzantine avec des dômes et des colonnes imposantes. La coupole centrale s\'élève à une hauteur de 158 mètres, faisant de la basilique l\'une des structures religieuses les plus hautes du monde.La capacité d\'accueil de la basilique est immense, pouvant accueillir jusqu\'à 18 000 fidèles à l\'intérieur, avec un espace extérieur capable d\'accueillir des milliers de personnes supplémentaires lors des célébrations religieuses spéciales.<br> L\'intérieur est richement décoré avec des œuvres d\'art religieuses, des fresques, des vitraux et des sculptures, comprenant un grand autel au centre de l\'édifice.', 'La Basilique de Notre-Dame de la Paix', 1000),

    ('images/inp-img.jpg', 'Crée le 04 septembre 1996 par décret N°96-678, l’Institut National Polytechnique Felix </br> Houphouët-Boigny (INP-HB) est né de la restructuration et de la fusion de : <br/>• L’Ecole Nationale Supérieure des Travaux Publics (ENSTP) ; </br> • L’Ecole Nationale Supérieure d’Agronomie (ENSA) ; </br> • L’Institut National Supérieur de l’Enseignement Technique (INSET) ; </br> • L’Institut Agricole de Bouaké (IAB). </br> L’INP-HB regroupe les grandes écoles que sont : </br> • L’École de Formation Continue et de Perfectionnement des Cadres (EFCPC) ; </br> • L’École Doctorale Polytechnique (EDP) ; </br> • L’École Supérieure de Commerce et d’Administration des Entreprises (ESCAE) ; </br> • L’École Supérieure des Mines et de Géologie (ESMG) ; </br> • L’École Supérieure d’Agronomie (ESA) ; </br> • L’École Supérieure du Pétrole et de l’Énergie (ESPE) ;</br> • L’École Supérieure de Travaux Publics (ESTP) et </br> • L’École Supérieure d’Industrie (ESI) au sein de laquelle nous sommes inscrits. </br> L’Institut accueille en son sein trois (3) classes préparatoires aux grandes écoles (CPGE). Il </br> s’agit des classes préparatoires technologiques, biologiques et commerciales. </br> Les missions assignées à l’INPHB sont : </br> • La formation initiale et la formation continue : formations qualifiantes (recyclage </br> et perfectionnement) des techniciens supérieurs, des ingénieurs et des ingénieurs </br> de conception dans les domaines de l’industrie, du commerce, de </br> l’administration, du génie civil, des mines et de la géologie ; </br> • La recherche appliquée dans les domaines cités précédemment ; </br> • L’assistance et la production au profit des entreprises et administrations.', 'l\'institut national polytechnique houphouet boigny', 7000),
    ('images/tisserand.jpeg', 'Situé à environ 5 km du centre-ville de Korhogo, le village de Waraniéré est célèbre pour ses articles vestimentaires tirés du terroir traditionnel. En effet, plus d\'une centaine de tisserands aidés par des fileuses traditionnelles s\'activent quotidiennement à filer et à dérouler des rouleaux de fils pour confectionner le pagne et<br>le boubou sénoufo, ainsi que de nombreux autres articles typiques à la région du Poro.<br>À Waraniéré, on est tisserand de père en fils. Le métier s\'apprend très jeune.<br>Vous pouvez également admirer de magnifiques peintures sur toile dans le village de Fakaha à une trentaine de kilomètres sur la route de Napiéolédougou, au sud de Korhogo.', 'les tisserands de waraniene', 6000),

    ('images/caseniofouin.jpeg', 'Le village de Niofouin ou (Niofoin) est l\'un des plus pittoresques de la Côte d\'Ivoire.<br>Situé à une soixantaine de kilomètres de Korhogo, plus précisément dans le quartier Niboladala, il offre richesse et authenticité. C\'est un village typiquement Sénoufo dont les murs des cases sont faits de banco et des toits de chaume.<br>En effet dans ce village, nous avons deux curiosités, deux cases fétiches, monuments sacrés abritant les entités Diby et Kalegbin qui ont pour vocation de préserver le village des invasions ennemies et de sortilèges. Ces deux monuments sont d\'une architecture assez originale.<br>Ce sont de magnifiques pièces centenaires dont seuls les initiés ont le droit d\'entrée.<br>Pour la petite anecdote, Niofouin a été l\'un des lieux de tournage du film La Victoire en chantant de Jean- Jacques Annaud (1976).', 'les cases aux fetiches de niofouin', 8000),

    ('images/perlekapele.jpeg', 'A Kapélé, monter des perles est tout un art.<br>Les perles de Kapélé sont des bijoux made in Côte d\'Ivoire, très prisées.<br>La confection de ces perles d\'une extrême minutie nécessite un excellent savoir-faire et offre un spectacle fascinant. En effet, les perles de Kapélé sont réalisées à base d\'argile, collectée dans les alentours du village. L\'argile provient de Bangodingua, un bas-fond situé à 100 m du village. Extraite de la carrière, elle est séchée sur des plaques métalliques ou sur des sacs plastiques pendant deux à trois jours. Après le séchage, l\'argile est pilée dans un gros mortier par les femmes, ensuite tamisée au tamis fin, prête à être pétrie. La perle<br>est ensuite façonnée par l\'artisan.<br>Pour créer des formes aussi nettes, il coince la tige en bambou entre ses orteils pour la faire tourner, tandis que le<br>bout d\'une plume lui sert de pinceau.<br>Le décor des perles se fait à base d\'une encre extraite d\'essences végétales.', 'le village de kapele', 12000),

    ('images/mosqueekong.jpg', 'Inscrites sur la liste du patrimoine culturel de l\'Unesco, en raison de leur très bonne conservation, de leurs valeurs historiques, culturelles et identité spirituelle, les 2 mosquées séculaires et centenaires de Kong de style soudanais sont des sites touristiques incontournables à visiter dans le district des savanes.<br>Elles sont caractérisées par une construction en terre, des charpentes en saillie, des contreforts verticaux couronnés de poteries ou d\'œufs d\'autruche, et par des minarets effilés.<br>La petite mosquée date du 17e siècle et la grande un peu plus tard. La grande Mosquée de Kong (Missiriba) fut détruite par Samory TOURE aux environs de 1897 et reconstruite au début du 20e siècle à l\'initiative de l\'administration coloniale.', 'la mosquée de Kong', 8000),
    ('images/sculpteurkoko.jpeg', 'Les sculpteurs de Dalekaha ont leur pavillon d\'exposition et leur entrepôt de leurs œuvres, situé dans le quartier kôkô à Korhogo.<br>Ces sculpteurs sont spécialisés non seulement dans la confection de masques, statuettes et d\'objets décoratifs d\'ici et d\'ailleurs, mais aussi et surtout dans la matérialisation des légendes propre à la tradition Sénoufo qui<br>confèrent aux sculptures un caractère sacré.<br>Fiers de vous présenter leurs merveilles, ces sculpteurs ne manqueront pas de vous expliquer la signification de chaque sculpture.', 'les sculpteurs de koko', 8000),

    ('images/muraillessordi.jpeg', 'Comme la Grande Muraille de Chine construite au 14ème siècle, le grand nord ivoirien a aussi sa muraille certes moins célèbre et plus petite mais toute aussi importante dans l\'histoire du peuple du nord.<br>En effet le village de Sordi dans la sous préfecture de Diawala se trouve des murailles, de véritables joyaux architecturaux, urbanistiques et culturels, qui dateraient autour du 18 ème siècle.<br>Elles ont été construites pour se protéger des invasions étrangères, des guerres comme celle de Samory Touré. Les murailles de Sordi sont faites en terre battue argileuse, de beurre de Karité, de lait et du sang des prisonniers de guerre révoltés. Les restes de ces murailles historiques dévoilent la maturité du génie militaire à l\'époque des villageois.<br>Ces murailles sont de trois niveaux:<br>Le premier niveau entoure et protège la chefferie, le second encercle le village et le dernier niveau plus immense représentait le cordon sécuritaire qui servait de premier rempart contre toutes attaques venues de l\'extérieur. Elles s\'étendent sur environ 40 hectares.', 'les murailles de sordi', 4000),

    ('images/toilesfakaha.jpg', 'L\' art ivoirien dans toute sa diversité.<br>Fakaha est un village du district des Savanes situé à 35 km de Korhogo et qui est particulièrement réputé pour la<br>fabrication de toiles, dites toiles de Korhogo. Celles-ci sont faites en peinture naturelle sur du coton.<br>À l\'origine, les dessins étaient faits sur les murs pour décorer les maisons. C\'est dans les années (1940/1950) que<br>les artisans ont commencé à peindre sur des toiles<br>Les motifs de ces toiles sont appliqués sur les tissus à l\'aide d\'outils traditionnels sommaires : des couteaux de différentes épaisseurs pour peindre, un petit rondin de bois d\'acacia, cure dent, une petite brosse taillée. La peinture est également obtenue traditionnellement, elle est tirée des feuilles d\'une plante de la région ou encore du jus de mil ou de l\'écorce de sorgho.<br> Les toiles de Fakaha seraient réputées pour avoir fortement inspiré le célèbre Artiste peintre espagnol, Pablo Picasso, lors de son voyage dans la région dans les années 1930.', 'le village de fakaha', 16000),

    ('images/rochesshienlow.jpeg', 'Les roches sacrées de Shien Low sont situées à Nianbélégué.<br>C\'est un lieu ancestral mystique sacré, lieu d\'adoration et de vœux. Le gardien du lieu est là en permanence pour prendre les demandes d\'offrandes des visiteurs (réussite d\'examens, enfants, mariage, guérissons prochaines...). Pour chaque demande un poulet est égorgé sur la roche.', 'les roches de shien low', 13000),
    ('images/karite.jpg', 'Au quartier Petit-Paris de Korhogo, la coopérative agricole Tcheregnimin (santé en senoufo) qui comprend plus de 150 femmes est spécialisée dans la production artisanale et dans la commercialisation du beurre de karité à Korhogo en Côte d\'Ivoire. Elle regroupe les femmes de Petit-Paris et d\'Ochienin deux quartiers situés dans l\'est de Korhogo sur la voix de Ferkessedougou.<br>Vous pouvez assister de A à Z à la fabrication de l\'excellent Beurre de karité de Korhogo.', 'le beurre de karite a korhogo', 14000),
    ('images/vanierdetorgokaha.jpeg', 'Situé à 3 km de Korhogo en venant de Napié, Torgokaha est un Village d\'artisans spécialisés dans la vannerie. Ils fabriquent des paniers en liane et raphia, des tamis pour le riz, des corbeilles pour transporter les noix de cola, des nattes servant de rideaux de porte. Ils font aussi des sièges en Bambou, et d\'autres pièces de vannerie en rônier.', 'les vaniers de torgokaha', 11000),

    ('images/cathedraleFerke.jpeg', 'Cathédrale Notre dame de Lourdes de Ferkessédougou, très bel édifice se trouve dans la cité du Tchologo.', 'la cathédrale notre dame de lourdes ferke', 11000),
    ('images/granite.jpeg', 'La carrière de Granite qui se situe aux abords de Korhogo, nous donne à la fois un spectacle aussi bien magnifique, la beauté des roches que touchant la pénibilité du travail des casseurs de granite. Il a lieu de préciser que l\'exploitation de granite à Korhogo est pratiquée depuis des décennies de façon artisanale par les korhogolais et depuis quelques années des sociétés industrielles exploitent également ce site. Cette activité engendre malheureusement l\'émission de poussière dans l\'atmosphère, des odeurs, des bruits et <br>la pollution sonore.', 'la carrière de granite de korhogo', 14000),
    ('images/banco.jpg', 'Transformée en parc national depuis 1953, le banco est un massif forestier de 3474 hectares. Il s’agit d’une forêt dense avec des pistes où les feuilles s’entrelacent pour donner l’impression d’un tunnel. Une incursion dans ce lieu vous permettra de découvrir ses merveilles et sa face cachée. Située entre la commune de Yopougon, Abobo et celle d’Adjamé, de nombreuses voies d’accès s’offrent aux visiteurs. Afin d’améliorer le confort des visiteurs, des paillotes ont été construites pour servir d’abris.', 'le parc national du banco', 1500),

    ('images/jardinBinger.jpg', 'C’est un site enchanteur et séduisant qui attire tous les amoureux de la simplicité et de la nature. Avec une superficie de plus de 54 hectares, il abrite des arbres de plus de 100 ans notamment le palmier à huile. On y trouve également certaines cultures,  telles que le café, le cacao, l’hévéa, l’asperge et la pomme de terre. Vous rencontrerez aussi plusieurs animaux comme des gazelles, serpents, antilopes, agoutis etc...', 'Le jardin botanique de Bingerville', 14000),
    ('images/ZooAbidjan.jpg', 'Crée en 1972, le Zoo National d’Abidjan est une aire protégée située entre  les communes d’Abobo et Cocody. Il abrite trois groupes importants d’animaux, les mammifères, reptiles et les oiseaux.  A ceux-ci s’ajoutent le petit groupe des rongeurs. Le Zoo compte 230 animaux répartis en 48 espèces. C’est l’endroit idéal pour renouer avec la faune.', 'Barrage de Taabo', 3500),
    ('images/aboumekro.jpg', 'Au cœur du « V baoulé », la Réserve de Faune d\'Abokouamékro (RFA) dresse fièrement ses nombreux atouts touristiques. Ceux-ci ont longtemps fait d\'elle, la destination privilégiée des touristes de Yamoussoukro en quête de safari.La réserve abrite des rhinocéros, des buffles, des bubales, des antilopes, des cobs de buffons, et de nombreuses autres espèces animales. Initialement appelée « Parc Animalier d\'Abokouamékro », elle a été créée à l\'initiative de feu le Président Félix Houphouët-Boigny, pour le développement du tourisme.', 'Parc National de la Comoé', 4000)");


    $images_associees = [
        [
            "description_id" => 1,
            "images" => ["images/cascade1.jpg", "images/cascade2.jpg", "images/cascade3.jpg", "images/cascade4.jpg", "images/cascade5.jpg"]
        ],

        [
            "description_id" => 2,
            "images" => ["images/dabou1.jpg", "images/dabou2.jpg", "images/dabou3.jpg"]
        ],

        [
            "description_id" => 3,
            "images" => ["images/basilique1.jpg", "images/basilique2.jpg", "images/basilique3.jpg", "images/basilique4.jpg"]
        ],

        [
            "description_id" => 4,
            "images" => ["images/inp-img1.jpg", "images/inp-img2.jpg","images/inp-img3.jpg","images/inp-img4.jpg"]
        ],

        [
            "description_id" => 5,
            "images" => ["images/tisserand1.jpg", "images/tisserand2.jpg","images/tisserand3.jpg"]
        ],

        [
            "description_id" => 6,
            "images" => ["images/caseniofouin1.jpg", "images/caseniofouin2.jpg","images/caseniofouin3.jpg","images/caseniofouin4.jpg"]
        ],

        [
            "description_id" => 7,
            "images" => ["images/perlekapele1.jpg", "images/perlekapele2.jpg", "images/perlekapele3.jpg","images/perlekapele4.jpg"]
        ],

        [
            "description_id" => 8,
            "images" => ["images/mosqueekong1.jpg","images/mosqueekong2.jpg","images/mosqueekong3.jpg","images/mosqueekong4.jpg"]
        ],

        [
            "description_id" => 9,
            "images" => ["images/sculpteurkoko1.jpg","images/sculpteurkoko2.jpg","images/sculpteurkoko3.jpg","images/sculpteurkoko4.jpg"]
        ],

        [
            "description_id" => 10,
            "images" => ["images/sordi1.jpg","images/sordi2.jpg","images/sordi3.jpg"]
        ],

        [
            "description_id" => 11,
            "images" => ["images/fakaha1.jpg","images/fakaha2.jpg","images/fakaha3.jpg","images/fakaha4.jpg"]
        ],

        [
            "description_id" => 12,
            "images" => ["images/rochesshienlow2.jpg","images/rochesshienlow3.jpg","images/rochesshienlow4.jpg"]
        ],

        [
            "description_id" => 13,
            "images" => ["images/karite1.jpg","images/karite2.jpg","images/karite3.jpg","images/karite4.jpg"]
        ],

        [
            "description_id" => 14,
            "images" => ["images/vanierdetorgokaha1.jpg","images/vanierdetorgokaha2.jpg","images/vanierdetorgokaha3.jpg","images/vanierdetorgokaha4.jpg"]
        ],  

        [
            "description_id" => 15,
            "images" => [ "images/cathedraleFerke1.jpg","images/cathedraleFerke2.jpg","images/cathedraleFerke3.jpg","images/cathedraleFerke4.jpg"]
        ],   

        [
            "description_id" => 16,
            "images" => ["images/granite1.jpg","images/granite2.jpg","images/granite3.jpg","images/granite4.jpg"]
        ],    

        [
            "description_id" => 17,
            "images" => ["images/banco1.jpg","images/banco2.jpg","images/banco3.jpg","images/banco4.jpg"]
        ], 

        [
            "description_id" => 18,
            "images" => ["images/jardinBinger1.jpg","images/jardinBinger2.jpg","images/jardinBinger3.jpg","images/jardinBinger4.jpg"]
        ],  

        [
            "description_id" => 19,
            "images" => ["images/ZooAbidjan1.jpeg","images/ZooAbidjan2.jpg","images/ZooAbidjan3.jpg","images/ZooAbidjan4.jpeg"]
        ],  

        [
            "description_id" => 20,
            "images" => ["images/aboumekro1.jpg","images/aboumekro2.jpg","images/aboumekro3.jpg","images/aboumekro4.jpg"]
        ],
    ];
    // opération de récuperation des indentifiants des éléments de la table descriptions
    // Parcours des images associées et insertion dans la table images_associees
    foreach ($images_associees as $images_data) {
        $description_id = $images_data['description_id'];
        $images = $images_data['images'];

        // Insertion des images associées pour cet élément
        foreach ($images as $image_url) {
            // Requête SQL d'insertion
            $sql = "INSERT INTO images_associees (description_id, image_url) VALUES ($description_id, '$image_url')";

            // Exécution de la requête
            $conn->query($sql);
        }
    }
    

}




/*
// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// Création de la base de données si elle n'existe pas
$dbname = "siteTouristique";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if ($conn->query($sql) === TRUE) {
    // echo "Base de données '$dbname' créée avec succès<br>";
} else {
    echo "Erreur lors de la création de la base de données: " . $conn->error . "<br>";
}

// Sélection de la base de données
$conn->select_db($dbname);

// Création de la table pour stocker les descriptions
$sql = "CREATE TABLE IF NOT EXISTS descriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    informations TEXT NOT NULL,
    titre VARCHAR(255) NOT NULL,
    prix INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    // echo "Table 'descriptions' créée avec succès<br>";
} else {
    echo "Erreur lors de la création de la table 'descriptions': " . $conn->error . "<br>";
}

// Création de la table pour stocker les images associées
$sql = "CREATE TABLE IF NOT EXISTS images_associees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description_id INT,
    image_url VARCHAR(255) NOT NULL,
    FOREIGN KEY (description_id) REFERENCES descriptions(id)
)";

if ($conn->query($sql) === TRUE) {
    // echo "Table 'images_associees' créée avec succès<br>";
} else {
    echo "Erreur lors de la création de la table 'images_associees': " . $conn->error . "<br>";
}

// Insertion des données dans la table descriptions
$sql = "INSERT INTO descriptions (image_url, informations, titre, prix) VALUES 
('images/cascademan.jpg', 'La ville de Man est un haut lieu du tourisme en Côte d\'ivoire grâce à ses nombreuses attractions touristiques dont celles de ses cascades naturelles.<br>L\'une des plus visitées de la région est la cascade naturelle de Zadepleu, située à 3 kilomètres de Man, route du Mont Tonkpi. Issue d\'une rivière à débit variable, elle s\'écoule sur une hauteur de 20 mètres environ et constitue un magnifique lieu de repos sous les grands arbres.<br>Man compte également d\'autres cascades comme celle de Glongouin située au pied de la Dent de Man, celle de Goba qui se trouve sur la route de Danané ainsi que la cascade de Deoule très peu connue. Ces cascades en escalier créent des paysages naturels impressionnants avec des séquences de plusieurs petites chutes d\'eau. Très prisées, les cascades de Man sont fréquentées par ceux qui viennent chercher un peu de fraîcheur en plongeant dans leurs piscines naturelles.<br>À l\'entrée des cascades de Man pour y avoir accès, vous devez vous acquitter d\'une somme de 200 ou de 300 francs/personne.', 'Les cascades de Man', 200),
('images/fortdabou.jpg', 'Ce bâtiment était à l\'époque une sentinelle et un point important dans la stratégie militaire de la France.<br>Le fort de Dabou fut construit par le commandant FAIDHERBE en 1853, suite à l\'expédition du contre-amiral BAUDIN, qui commandait l\'escadre des côtes occidentales d\'Afrique. <br>Après la défaite française contre la Prusse en 1871, le gouvernement rappela la garnison qui se tenait à Dabou. Arthur VERDIER, devenu le nouveau résident de France, laissa le fort de Dabou à l\'abandon et en état de délabrement jusqu\'en 1893. Cette année-là, le général Louis Gustave Binger arrive en Côte d\'Ivoire et décide de le réhabiliter.<br>Dabou devint un des postes administratifs du littoral, servant de bureau des douanes et également de garnison à 125 miliciens.<br>À sa suite, plusieurs administrateurs et personnalités lui succèdent et résident au Fort.<br>Puis le 11 juillet 1899 arrivèrent les Sœurs Notre Dame des Apôtres pour fonder une école en internat d\'une quinzaine de jeunes filles, dite \'l\'école des fiancées\' où il était dispensé un enseignement préparant ces jeunes filles au mariage. Cette école des sœurs fonctionnera jusqu\'en 1913.<br>Un large escalier de pierre vous accueille jusqu\'à la porte du fort. Le mur d\'enceinte a six mètres de hauteur et se développe sur les quatre faces d\'un carré ayant environ quarante mètres de côté deux vieux canons napoléoniens postés au sommet du FORT rappelant la lutte acharnée des colons Français à protéger leur acquis de la convoitise des autres explorateurs.<br>Aujourd\'hui, il ne reste plus que quelques vestiges qui rappellent le glorieux passé du fort de Dabou.', 'le fort de dabou', 2000),
('images/basilique.jpg', 'La Basilique de Notre-Dame de la Paix, située à Yamoussoukro, la capitale politique de la Côte d\'Ivoire, est l\'une des plus grandes églises du monde et est souvent considérée comme la plus grande basilique au monde. Construits à la demande du président ivoirien Félix Houphouët-Boigny, les travaux ont débuté en 1986 et ont duré plusieurs années.</br> L\'architecture de la basilique est inspirée de la basilique Saint-Pierre du Vatican à Rome, présentant une structure néo-byzantine avec des dômes et des colonnes imposantes. La coupole centrale s\'élève à une hauteur de 158 mètres, faisant de la basilique l\'une des structures religieuses les plus hautes du monde.La capacité d\'accueil de la basilique est immense, pouvant accueillir jusqu\'à 18 000 fidèles à l\'intérieur, avec un espace extérieur capable d\'accueillir des milliers de personnes supplémentaires lors des célébrations religieuses spéciales.<br> L\'intérieur est richement décoré avec des œuvres d\'art religieuses, des fresques, des vitraux et des sculptures, comprenant un grand autel au centre de l\'édifice.', 'La Basilique de Notre-Dame de la Paix', 1000),
('images/inp-img.jpg', 'Crée le 04 septembre 1996 par décret N°96-678, l’Institut National Polytechnique Felix </br> Houphouët-Boigny (INP-HB) est né de la restructuration et de la fusion de : <br/>• L’Ecole Nationale Supérieure des Travaux Publics (ENSTP) ; </br> • L’Ecole Nationale Supérieure d’Agronomie (ENSA) ; </br> • L’Institut National Supérieur de l’Enseignement Technique (INSET) ; </br> • L’Institut Agricole de Bouaké (IAB). </br> L’INP-HB regroupe les grandes écoles que sont : </br> • L’École de Formation Continue et de Perfectionnement des Cadres (EFCPC) ; </br> • L’École Doctorale Polytechnique (EDP) ; </br> • L’École Supérieure de Commerce et d’Administration des Entreprises (ESCAE) ; </br> • L’École Supérieure des Mines et de Géologie (ESMG) ; </br> • L’École Supérieure d’Agronomie (ESA) ; </br> • L’École Supérieure du Pétrole et de l’Énergie (ESPE) ;</br> • L’École Supérieure de Travaux Publics (ESTP) et </br> • L’École Supérieure d’Industrie (ESI) au sein de laquelle nous sommes inscrits. </br> L’Institut accueille en son sein trois (3) classes préparatoires aux grandes écoles (CPGE). Il </br> s’agit des classes préparatoires technologiques, biologiques et commerciales. </br> Les missions assignées à l’INPHB sont : </br> • La formation initiale et la formation continue : formations qualifiantes (recyclage </br> et perfectionnement) des techniciens supérieurs, des ingénieurs et des ingénieurs </br> de conception dans les domaines de l’industrie, du commerce, de </br> l’administration, du génie civil, des mines et de la géologie ; </br> • La recherche appliquée dans les domaines cités précédemment ; </br> • L’assistance et la production au profit des entreprises et administrations.', 'l\'institut national polytechnique houphouet boigny', 7000),
('images/tisserand.jpeg', 'Situé à environ 5 km du centre-ville de Korhogo, le village de Waraniéré est célèbre pour ses articles vestimentaires tirés du terroir traditionnel. En effet, plus d\'une centaine de tisserands aidés par des fileuses traditionnelles s\'activent quotidiennement à filer et à dérouler des rouleaux de fils pour confectionner le pagne et<br>le boubou sénoufo, ainsi que de nombreux autres articles typiques à la région du Poro.<br>À Waraniéré, on est tisserand de père en fils. Le métier s\'apprend très jeune.<br>Vous pouvez également admirer de magnifiques peintures sur toile dans le village de Fakaha à une trentaine de kilomètres sur la route de Napiéolédougou, au sud de Korhogo.', 'les tisserands de waraniene', 6000),
('images/caseniofouin.jpeg', 'Le village de Niofouin ou (Niofoin) est l\'un des plus pittoresques de la Côte d\'Ivoire.<br>Situé à une soixantaine de kilomètres de Korhogo, plus précisément dans le quartier Niboladala, il offre richesse et authenticité. C\'est un village typiquement Sénoufo dont les murs des cases sont faits de banco et des toits de chaume.<br>En effet dans ce village, nous avons deux curiosités, deux cases fétiches, monuments sacrés abritant les entités Diby et Kalegbin qui ont pour vocation de préserver le village des invasions ennemies et de sortilèges. Ces deux monuments sont d\'une architecture assez originale.<br>Ce sont de magnifiques pièces centenaires dont seuls les initiés ont le droit d\'entrée.<br>Pour la petite anecdote, Niofouin a été l\'un des lieux de tournage du film La Victoire en chantant de Jean- Jacques Annaud (1976).', 'les cases aux fetiches de niofouin', 8000),
('images/perlekapele.jpeg', 'A Kapélé, monter des perles est tout un art.<br>Les perles de Kapélé sont des bijoux made in Côte d\'Ivoire, très prisées.<br>La confection de ces perles d\'une extrême minutie nécessite un excellent savoir-faire et offre un spectacle fascinant. En effet, les perles de Kapélé sont réalisées à base d\'argile, collectée dans les alentours du village. L\'argile provient de Bangodingua, un bas-fond situé à 100 m du village. Extraite de la carrière, elle est séchée sur des plaques métalliques ou sur des sacs plastiques pendant deux à trois jours. Après le séchage, l\'argile est pilée dans un gros mortier par les femmes, ensuite tamisée au tamis fin, prête à être pétrie. La perle<br>est ensuite façonnée par l\'artisan.<br>Pour créer des formes aussi nettes, il coince la tige en bambou entre ses orteils pour la faire tourner, tandis que le<br>bout d\'une plume lui sert de pinceau.<br>Le décor des perles se fait à base d\'une encre extraite d\'essences végétales.', 'le village de kapele', 12000),
('images/mosqueekong.jpg', 'Inscrites sur la liste du patrimoine culturel de l\'Unesco, en raison de leur très bonne conservation, de leurs valeurs historiques, culturelles et identité spirituelle, les 2 mosquées séculaires et centenaires de Kong de style soudanais sont des sites touristiques incontournables à visiter dans le district des savanes.<br>Elles sont caractérisées par une construction en terre, des charpentes en saillie, des contreforts verticaux couronnés de poteries ou d\'œufs d\'autruche, et par des minarets effilés.<br>La petite mosquée date du 17e siècle et la grande un peu plus tard. La grande Mosquée de Kong (Missiriba) fut détruite par Samory TOURE aux environs de 1897 et reconstruite au début du 20e siècle à l\'initiative de l\'administration coloniale.', 'la mosquée de Kong', 8000),
('images/sculpteurkoko.jpeg', 'Les sculpteurs de Dalekaha ont leur pavillon d\'exposition et leur entrepôt de leurs œuvres, situé dans le quartier kôkô à Korhogo.<br>Ces sculpteurs sont spécialisés non seulement dans la confection de masques, statuettes et d\'objets décoratifs d\'ici et d\'ailleurs, mais aussi et surtout dans la matérialisation des légendes propre à la tradition Sénoufo qui<br>confèrent aux sculptures un caractère sacré.<br>Fiers de vous présenter leurs merveilles, ces sculpteurs ne manqueront pas de vous expliquer la signification de chaque sculpture.', 'les sculpteurs de koko', 8000),
('images/muraillessordi.jpeg', 'Comme la Grande Muraille de Chine construite au 14ème siècle, le grand nord ivoirien a aussi sa muraille certes moins célèbre et plus petite mais toute aussi importante dans l\'histoire du peuple du nord.<br>En effet le village de Sordi dans la sous préfecture de Diawala se trouve des murailles, de véritables joyaux architecturaux, urbanistiques et culturels, qui dateraient autour du 18 ème siècle.<br>Elles ont été construites pour se protéger des invasions étrangères, des guerres comme celle de Samory Touré. Les murailles de Sordi sont faites en terre battue argileuse, de beurre de Karité, de lait et du sang des prisonniers de guerre révoltés. Les restes de ces murailles historiques dévoilent la maturité du génie militaire à l\'époque des villageois.<br>Ces murailles sont de trois niveaux:<br>Le premier niveau entoure et protège la chefferie, le second encercle le village et le dernier niveau plus immense représentait le cordon sécuritaire qui servait de premier rempart contre toutes attaques venues de l\'extérieur. Elles s\'étendent sur environ 40 hectares.', 'les murailles de sordi', 4000),
('images/toilesfakaha.jpg', 'L\' art ivoirien dans toute sa diversité.<br>Fakaha est un village du district des Savanes situé à 35 km de Korhogo et qui est particulièrement réputé pour la<br>fabrication de toiles, dites toiles de Korhogo. Celles-ci sont faites en peinture naturelle sur du coton.<br>À l\'origine, les dessins étaient faits sur les murs pour décorer les maisons. C\'est dans les années (1940/1950) que<br>les artisans ont commencé à peindre sur des toiles<br>Les motifs de ces toiles sont appliqués sur les tissus à l\'aide d\'outils traditionnels sommaires : des couteaux de différentes épaisseurs pour peindre, un petit rondin de bois d\'acacia, cure dent, une petite brosse taillée. La peinture est également obtenue traditionnellement, elle est tirée des feuilles d\'une plante de la région ou encore du jus de mil ou de l\'écorce de sorgho.<br> Les toiles de Fakaha seraient réputées pour avoir fortement inspiré le célèbre Artiste peintre espagnol, Pablo Picasso, lors de son voyage dans la région dans les années 1930.', 'le village de fakaha', 16000),
('images/rochesshienlow.jpeg', 'Les roches sacrées de Shien Low sont situées à Nianbélégué.<br>C\'est un lieu ancestral mystique sacré, lieu d\'adoration et de vœux. Le gardien du lieu est là en permanence pour prendre les demandes d\'offrandes des visiteurs (réussite d\'examens, enfants, mariage, guérissons prochaines...). Pour chaque demande un poulet est égorgé sur la roche.', 'les roches de shien low', 13000),
('images/karite.jpg', 'Au quartier Petit-Paris de Korhogo, la coopérative agricole Tcheregnimin (santé en senoufo) qui comprend plus de 150 femmes est spécialisée dans la production artisanale et dans la commercialisation du beurre de karité à Korhogo en Côte d\'Ivoire. Elle regroupe les femmes de Petit-Paris et d\'Ochienin deux quartiers situés dans l\'est de Korhogo sur la voix de Ferkessedougou.<br>Vous pouvez assister de A à Z à la fabrication de l\'excellent Beurre de karité de Korhogo.', 'le beurre de karite a korhogo', 14000),
('images/vanierdetorgokaha.jpeg', 'Situé à 3 km de Korhogo en venant de Napié, Torgokaha est un Village d\'artisans spécialisés dans la vannerie. Ils fabriquent des paniers en liane et raphia, des tamis pour le riz, des corbeilles pour transporter les noix de cola, des nattes servant de rideaux de porte. Ils font aussi des sièges en Bambou, et d\'autres pièces de vannerie en rônier.', 'les vaniers de torgokaha', 11000),
('images/cathedraleFerke.jpeg', 'Cathédrale Notre dame de Lourdes de Ferkessédougou, très bel édifice se trouve dans la cité du Tchologo.', 'la cathédrale notre dame de lourdes ferke', 11000),
('images/granite.jpeg', 'La carrière de Granite qui se situe aux abords de Korhogo, nous donne à la fois un spectacle aussi bien magnifique, la beauté des roches que touchant la pénibilité du travail des casseurs de granite. Il a lieu de préciser que l\'exploitation de granite à Korhogo est pratiquée depuis des décennies de façon artisanale par les korhogolais et depuis quelques années des sociétés industrielles exploitent également ce site. Cette activité engendre malheureusement l\'émission de poussière dans l\'atmosphère, des odeurs, des bruits et <br>la pollution sonore.', 'la carrière de granite de korhogo', 14000),
('images/banco.jpg', 'Transformée en parc national depuis 1953, le banco est un massif forestier de 3474 hectares. Il s’agit d’une forêt dense avec des pistes où les feuilles s’entrelacent pour donner l’impression d’un tunnel. Une incursion dans ce lieu vous permettra de découvrir ses merveilles et sa face cachée. Située entre la commune de Yopougon, Abobo et celle d’Adjamé, de nombreuses voies d’accès s’offrent aux visiteurs. Afin d’améliorer le confort des visiteurs, des paillotes ont été construites pour servir d’abris.', 'le parc national du banco', 1500),
('images/jardinBinger.jpg', 'C’est un site enchanteur et séduisant qui attire tous les amoureux de la simplicité et de la nature. Avec une superficie de plus de 54 hectares, il abrite des arbres de plus de 100 ans notamment le palmier à huile. On y trouve également certaines cultures,  telles que le café, le cacao, l’hévéa, l’asperge et la pomme de terre. Vous rencontrerez aussi plusieurs animaux comme des gazelles, serpents, antilopes, agoutis etc...', 'Le jardin botanique de Bingerville', 14000),
('images/ZooAbidjan.jpg', 'Crée en 1972, le Zoo National d’Abidjan est une aire protégée située entre  les communes d’Abobo et Cocody. Il abrite trois groupes importants d’animaux, les mammifères, reptiles et les oiseaux.  A ceux-ci s’ajoutent le petit groupe des rongeurs. Le Zoo compte 230 animaux répartis en 48 espèces. C’est l’endroit idéal pour renouer avec la faune.', 'Barrage de Taabo', 3500),
('images/aboumekro.jpg', 'Au cœur du « V baoulé », la Réserve de Faune d\'Abokouamékro (RFA) dresse fièrement ses nombreux atouts touristiques. Ceux-ci ont longtemps fait d\'elle, la destination privilégiée des touristes de Yamoussoukro en quête de safari.La réserve abrite des rhinocéros, des buffles, des bubales, des antilopes, des cobs de buffons, et de nombreuses autres espèces animales. Initialement appelée « Parc Animalier d\'Abokouamékro », elle a été créée à l\'initiative de feu le Président Félix Houphouët-Boigny, pour le développement du tourisme.', 'Parc National de la Comoé', 4000)
";

if ($conn->query($sql) === TRUE) {
    // echo "Données insérées dans la table 'descriptions' avec succès<br>";
} else {
    echo "Erreur lors de l'insertion des données dans la table 'descriptions': " . $conn->error . "<br>";
}


// Tableau des images associées pour chaque élément
$images_associees = [
    [
        "description_id" => 1,
        "images" => ["images/cascade1.jpg", "images/cascade2.jpg", "images/cascade3.jpg", "images/cascade4.jpg", "images/cascade5.jpg"]
    ],

    [
        "description_id" => 2,
        "images" => ["images/dabou1.jpg", "images/dabou2.jpg", "images/dabou3.jpg"]
    ],

    [
        "description_id" => 3,
        "images" => ["images/basilique1.jpg", "images/basilique2.jpg", "images/basilique3.jpg", "images/basilique4.jpg"]
    ],

    [
        "description_id" => 4,
        "images" => ["images/inp-img1.jpg", "images/inp-img2.jpg","images/inp-img3.jpg","images/inp-img4.jpg"]
    ],

    [
        "description_id" => 5,
        "images" => ["images/tisserand1.jpg", "images/tisserand2.jpg","images/tisserand3.jpg"]
    ],

    [
        "description_id" => 6,
        "images" => ["images/caseniofouin1.jpg", "images/caseniofouin2.jpg","images/caseniofouin3.jpg","images/caseniofouin4.jpg"]
    ],

    [
        "description_id" => 7,
        "images" => ["images/perlekapele1.jpg", "images/perlekapele2.jpg", "images/perlekapele3.jpg","images/perlekapele4.jpg"]
    ],

    [
        "description_id" => 8,
        "images" => ["images/mosqueekong1.jpg","images/mosqueekong2.jpg","images/mosqueekong3.jpg","images/mosqueekong4.jpg"]
    ],

    [
        "description_id" => 9,
        "images" => ["images/sculpteurkoko1.jpg","images/sculpteurkoko2.jpg","images/sculpteurkoko3.jpg","images/sculpteurkoko4.jpg"]
    ],

    [
        "description_id" => 10,
        "images" => ["images/sordi1.jpg","images/sordi2.jpg","images/sordi3.jpg"]
    ],

    [
        "description_id" => 11,
        "images" => ["images/fakaha1.jpg","images/fakaha2.jpg","images/fakaha3.jpg","images/fakaha4.jpg"]
    ],

    [
        "description_id" => 12,
        "images" => ["images/rochesshienlow2.jpg","images/rochesshienlow3.jpg","images/rochesshienlow4.jpg"]
    ],

    [
        "description_id" => 13,
        "images" => ["images/karite1.jpg","images/karite2.jpg","images/karite3.jpg","images/karite4.jpg"]
    ],

    [
        "description_id" => 14,
        "images" => ["images/vanierdetorgokaha1.jpg","images/vanierdetorgokaha2.jpg","images/vanierdetorgokaha3.jpg","images/vanierdetorgokaha4.jpg"]
    ],  

    [
        "description_id" => 15,
        "images" => [ "images/cathedraleFerke1.jpg","images/cathedraleFerke2.jpg","images/cathedraleFerke3.jpg","images/cathedraleFerke4.jpg"]
    ],   

    [
        "description_id" => 16,
        "images" => ["images/granite1.jpg","images/granite2.jpg","images/granite3.jpg","images/granite4.jpg"]
    ],    

    [
        "description_id" => 17,
        "images" => ["images/banco1.jpg","images/banco2.jpg","images/banco3.jpg","images/banco4.jpg"]
    ], 

    [
        "description_id" => 18,
        "images" => ["images/jardinBinger1.jpg","images/jardinBinger2.jpg","images/jardinBinger3.jpg","images/jardinBinger4.jpg"]
    ],  

    [
        "description_id" => 19,
        "images" => ["images/ZooAbidjan1.jpeg","images/ZooAbidjan2.jpg","images/ZooAbidjan3.jpg","images/ZooAbidjan4.jpeg"]
    ],  

    [
        "description_id" => 20,
        "images" => ["images/aboumekro1.jpg","images/aboumekro2.jpg","images/aboumekro3.jpg","images/aboumekro4.jpg"]
    ],
];
// opération de récuperation des indentifiants des éléments de la table descriptions
// Parcours des images associées et insertion dans la table images_associees
foreach ($images_associees as $images_data) {
    $description_id = $images_data['description_id'];
    $images = $images_data['images'];

    // Insertion des images associées pour cet élément
    foreach ($images as $image_url) {
        // Requête SQL d'insertion
        $sql = "INSERT INTO images_associees (description_id, image_url) VALUES ($description_id, '$image_url')";

        // Exécution de la requête
        if ($conn->query($sql) === TRUE) {
            // echo "Images associées insérées avec succès pour la description $description_id.<br>";
        } else {
            echo "Erreur lors de l'insertion des images associées : " . $conn->error . "<br>";
        }
    }
}
*/

?>

