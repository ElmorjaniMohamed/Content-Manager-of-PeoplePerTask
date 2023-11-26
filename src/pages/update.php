<?php
// Inclure le fichier de connexion à la base de données
include("../../php/conn.php");

// Récupérer les données du formulaire
$id = $_POST["userid"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$region = $_POST["region"]; 
$city = $_POST["city"];

echo $id . "£=". $username . "£=". $email . "£=".$password ."£=". $region ."£=". $city ;// Requête SQL avec prepared statements
$sql = "UPDATE Users
        SET
            username = '$username',
            email = '$email',
            Password = '$password',
            region_id = $region,  
            city_id = $city
        WHERE
        userid=$id";

$result = mysqli_query($conn, $sql);

// Vérification du succès de la requête
if ($result) {
    header("location: users.php");
    exit;
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_stmt_error($stmt);
}

mysqli_close($conn);
?>