<?php
// connexion
include_once("../../php/conn.php");

// create user
if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $region = $_POST["region"];
    $city = $_POST["city"];

    $sql = "INSERT INTO users ( `username`, `email`, `Password`, `region_id`, `city_id`)
    VALUES ('$username','$email','$password',$region,$city);";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        header("Location: users.php?msg=New record create successfully ");
    } else {
        echo "failed:" . mysqli_error($conn);

    }

    mysqli_close($conn);

}

?>
