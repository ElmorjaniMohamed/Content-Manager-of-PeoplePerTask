<?php
// Inclure le fichier de connexion à la base de données
include("../../php/conn.php");

// Récupérer les données du formulaire
function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
$id = test_input($_POST["userid"]);
$username = test_input($_POST["username"]);
$email = test_input($_POST["email"]);
$password = test_input($_POST["password"]);
$region = test_input($_POST["region"]);
$city = test_input($_POST["city"]);


// Requête SQL avec prepared statements
$sql = "UPDATE Users
        SET
            username = '$username',
            email = '$email',
            Password = '$password',
            region_id = $region,
            city_id = $city
        WHERE
        userid=$id";

// Préparation de la requête
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