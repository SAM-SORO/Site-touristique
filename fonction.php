
<?php

function getAllDescriptions($conn) {
    //$conn = require('connexion.php'); 

    // Requête pour récupérer toutes les descriptions
    $sql = "SELECT * FROM descriptions";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $descriptions = [];
        while ($row = $result->fetch_assoc()) {
            $descriptions[] = $row;
        }
        $result->close(); // Fermez explicitement le résultat après l'avoir utilisé
        $conn->close(); // Fermez la connexion à la base de données
        return $descriptions;
    } else {
        $result->close(); // Fermez explicitement le résultat
        $conn->close(); // Fermez la connexion à la base de données
        return [];  // Retourner un tableau vide si aucune description n'est trouvée
    }
}


// Méthode pour récupérer les informations sur la description à partir de la table 'descriptions'
function getDescriptionById($conn, $description_id) {
    //$conn = require('connexion.php'); 

    // Préparer la requête SQL pour récupérer les informations de la description avec l'identifiant donné
    $sql = "SELECT * FROM descriptions WHERE id = $description_id";

    // Exécuter la requête SQL
    $result = $conn->query($sql);

    // Vérifier s'il y a des résultats
    if ($result->num_rows > 0) {
        // Récupérer la première ligne de résultats
        $description_info = $result->fetch_assoc();
        return $description_info;
    } else {
        // Aucune description trouvée avec cet identifiant
        return null;
    }
}


// Méthode pour récupérer les images associées à une description à partir de la table 'images_associees'
function getAssociatedImages($conn, $description_id) {

    // Préparer la requête SQL pour récupérer les images associées à la description donnée
    $sql = "SELECT * FROM images_associees WHERE description_id = $description_id";

    // Exécuter la requête SQL
    $result = $conn->query($sql);

    // Créer un tableau pour stocker les URLs des images associées
    $associated_images = array();

    // Vérifier s'il y a des résultats
    if ($result->num_rows > 0) {
        // Parcourir les résultats et stocker les URLs des images associées dans le tableau
        while ($row = $result->fetch_assoc()) {
            $associated_images[] = $row['image_url'];
        }
    }

    // Retourner le tableau d'URLs des images associées
    return $associated_images;
}

