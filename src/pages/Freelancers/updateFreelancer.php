<?php
// Inclure le fichier de connexion à la base de données
include("../../../php/conn.php");

// Récupérer les données du formulaire
$FreelancerID = $_POST["FreelancerID"];
$FreelancerName = $_POST["name"];
$skills = $_POST["skills"];
$Job = $_POST["job"];


// Requête SQL avec prepared statements
$sql = "UPDATE freelancers
        SET
        FreelancerName = '$FreelancerName',
        Skills = '$skills',
        Job = '$Job'
        WHERE
        FreelancerID = $FreelancerID";

$result = mysqli_query($conn, $sql);

// Vérification du succès de la requête
if ($result) {
    header("location: Freelancers.php");
    exit;
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_stmt_error($stmt);
}

mysqli_close($conn);
?>