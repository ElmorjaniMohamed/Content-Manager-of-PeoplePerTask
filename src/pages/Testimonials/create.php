<?php
// connexion
require("../../../php/conn.php");

$username = $_POST["username"];
$Comment = $_POST["Comment"];


$existingTestimonialQuery = "SELECT * FROM `testimonials` WHERE `UserID` = $username";
$existingTestimonialResult = mysqli_query($conn, $existingTestimonialQuery);

if (mysqli_num_rows($existingTestimonialResult) > 0) {
    echo "User already has a testimonial. You can only add one testimonial per user.";
} else {
    
    $insertQuery = "INSERT INTO `testimonials` (`Comment`, `UserID`) VALUES ('$Comment', $username);";
    $insertResult = mysqli_query($conn, $insertQuery);

    if ($insertResult) {
        header("Location: Testimonials.php?msg=New record created successfully");
        exit();
    } else {
        echo "Failed to insert: " . mysqli_error($conn);
    }
}

// Fermez la connexion
mysqli_close($conn);
?>
