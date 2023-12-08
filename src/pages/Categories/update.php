<?php
// Inclure le fichier de connexion à la base de données
include("../../../php/conn.php");


// Récupérer les données du formulaire

$query = "SELECT CategoryID FROM categories";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $CategoryID = $_POST["CategoryID"];
        $CategoryName = $_POST["CategoryName"];
        $Description = $_POST["Description"];
    }

}

// Requête SQL avec prepared statements
$sql = "UPDATE categories SET CategoryID = $CategoryID, CategoryName = '$CategoryName', Description = '$Description' WHERE CategoryID = $CategoryID ";

$result = mysqli_query($conn, $sql);

// Vérification du succès de la requête
if ($result) {
    header("location: categories.php");
    exit;
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_stmt_error($stmt);
}

mysqli_close($conn);
?>