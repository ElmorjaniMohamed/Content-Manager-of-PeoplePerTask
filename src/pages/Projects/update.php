<?php
// Inclure le fichier de connexion à la base de données
include("../../../php/conn.php");

// Récupérer les données du formulaire
$query = "SELECT userid FROM users";
$result = mysqli_query($conn, $query);


$ProjectID = $_POST["ProjectID"];
$ProjectTitle = $_POST["ProjectTitle"];
$DescriptionProject = $_POST["DescriptionProject"];
$UserID = $_POST ["username"];
// $Category = $_POST["CategoryID"];


// Requête SQL avec prepared statements
$sql = "UPDATE `projects` SET `ProjectID`='$ProjectID',`ProjectTitle`='$ProjectTitle',`DescriptionProject`='$DescriptionProject',`userid`='$UserID' WHERE ProjectID = $ProjectID";

$result = mysqli_query($conn, $sql);

// Vérification du succès de la requête
if ($result) {
    header("location: projects.php");
    exit;
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_stmt_error($stmt);
}

mysqli_close($conn);
?>