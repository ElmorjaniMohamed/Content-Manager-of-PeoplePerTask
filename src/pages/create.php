<?php
// connexion
include_once("../../php/conn.php");

// create user
if (isset($_POST["submit"])) {

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST["username"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $region = test_input($_POST["region"]);
    $city = test_input($_POST["city"]);

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