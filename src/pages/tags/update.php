<?php

include("../../../php/conn.php");

$id = $_POST["id"];
$Name = $_POST["Name"];

$sql = "UPDATE `tags` SET `Name`= ?  WHERE `id` = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "si", $Name, $id);

$result = mysqli_stmt_execute($stmt);

if ($result) {
    header("location: tags.php");
    exit;
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);

mysqli_close($conn);
?>
