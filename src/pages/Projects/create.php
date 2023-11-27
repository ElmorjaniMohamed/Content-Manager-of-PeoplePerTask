<?php
// connexion
require("../../../php/conn.php");

// Effectuer une requête SELECT pour récupérer les userid existants
$query = "SELECT userid FROM users";
$result = mysqli_query($conn, $query);

$ProjectID = $_POST["ProjectID"];
$ProjectTitle = $_POST["ProjectTitle"];
$DescriptionProject = $_POST["DescriptionProject"];
// $Category = $_POST["CategoryID"];

if ($result) {
    // Récupérer la première ligne du résultat (vous pouvez ajuster cela en fonction de vos besoins)
    $row = mysqli_fetch_assoc($result);

    // Assurez-vous qu'une ligne a été récupérée
    if ($row) {
        // Récupérer le userid de la première ligne
        $UserID = $row['userid'];

        // Utilisez la variable $UserID dans votre requête d'insertion
        $sql = "INSERT INTO projects (`ProjectTitle`, `DescriptionProject`, `UserID`) VALUES ('$ProjectTitle', '$DescriptionProject', $UserID)";

        // Exécutez la requête
        $insertResult = mysqli_query($conn, $sql);

        if ($insertResult) {
            header("Location: projects.php?msg=New record created successfully");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    } else {
        echo "No userid found in the users table.";
    }
} else {
    echo "Query failed: " . mysqli_error($conn);
}

// Fermez la connexion
mysqli_close($conn);









?>