<?php
    require("creerBd.php");

    $servername = "localhost";
    $username = "root";
    $password = "samuel";

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué: " . $conn->connect_error);
    }
    // Vérification si la base de donqnées 'site' existe
    $database = "site";
    $query = "SELECT SCHEMA_NAME FROM information_schema.SCHEMATA WHERE SCHEMA_NAME = '$database'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // La base de données 'site' existe, se connecter à cette base de données
        $conn->select_db($database);
        //echo "La base de données 'site' existe. Connexion établie.";
    } else {
        // La base de données 'site' n'existe pas, la créer
        if ($conn->query("CREATE DATABASE $database") === TRUE) {
            //echo "La base de données 'site' a été créée avec succès.";
            creerTables($conn);
            preRemplirTable($conn);
        } else {
            echo "Erreur lors de la création de la base de données : " . $conn->error;
        }
    }
    return $conn;

?>



