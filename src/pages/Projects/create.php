<?php
// connexion
require("../../../php/conn.php");
session_start();
// Effectuer une requête SELECT pour récupérer les userid existants
$query = "SELECT userid FROM users";
$result = mysqli_query($conn, $query);

$qeury_Category = "SELECT CategoryID FROM categories";
$result_Category = mysqli_query($conn, $qeury_Category);

$ProjectID = $_POST["ProjectID"];
$ProjectTitle = $_POST["ProjectTitle"];
$DescriptionProject = $_POST["DescriptionProject"];
$CategoryID = $_POST['CategoryID'];



if ($result) {
    // Récupérer la première ligne du résultat (vous pouvez ajuster cela en fonction de vos besoins)
    $row = mysqli_fetch_assoc($result);

    // Assurez-vous qu'une ligne a été récupérée
    if ($row) {
        
        $UserID = $_SESSION['id'];
       
    
        // Utilisez la variable $UserID dans votre requête d'insertion
        $sql = "INSERT INTO projects (`ProjectTitle`, `DescriptionProject`, `UserID`, `CategoryID`) VALUES ('$ProjectTitle', '$DescriptionProject', $UserID, $CategoryID)";

        // Exécutez la requête
        $insertResult = mysqli_query($conn, $sql);

        if ($insertResult) {
            header("Location: ../profileuser.php?msg=New record created successfully");
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