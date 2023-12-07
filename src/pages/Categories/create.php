<?php
// connexion
require("../../../php/conn.php");

// Effectuer une requête SELECT pour récupérer les userid existants
$query = "SELECT CategoryID FROM categories";
$result = mysqli_query($conn, $query);

$CategoryID = $_POST["CategoryID"];
$CategoryName = $_POST["CategoryName"];
$Description = $_POST["Description"];


if ($result) {

    $row = mysqli_fetch_assoc($result);

    // Assurez-vous qu'une ligne a été récupérée
    if ($row) {
        // Récupérer le userid de la première ligne
        $CategoryID = $row['CategoryID'];

        // Utilisez la variable $UserID dans votre requête d'insertion
        $sql = "INSERT INTO categories (`CategoryName`, `Description`) VALUES ('$CategoryName', '$Description')";

        // Exécutez la requête
        $insertResult = mysqli_query($conn, $sql);

        if ($insertResult) {
            header("Location: Categories.php?msg=New record created successfully");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    } else {
        echo "No CategoryID found in the categories table.";
    }
} else {
    echo "Query failed: " . mysqli_error($conn);
}

// Fermez la connexion
mysqli_close($conn);

?>