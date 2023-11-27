<?php
// connexion
include_once("../../../php/conn.php");

// create freelancer
if (isset($_POST["submit"])) {

    $FreelancerID = $_POST["FreelancerID"];
    $FreelancerName = $_POST["name"];
    $skills = $_POST["skills"];
    $Job = $_POST["job"];
    $UserID = $_POST["UserID"];

    $sql = "INSERT INTO freelancers (`FreelancerName`, `Skills`, `Job`) VALUES ('$FreelancerName','$skills','$Job')";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        header("Location: Freelancers.php?msg=New record create successfully ");
    } else {
        echo "failed:" . mysqli_error($conn);

    }

    mysqli_close($conn);

}

?>
