<?php
include("../../../php/conn.php");

$TestimonialID = $_GET['id'];

$sql = "DELETE FROM `testimonials` WHERE TestimonialID = $TestimonialID";
$res = mysqli_query($conn, $sql);

if($res){
    mysqli_close($conn);
    header("location:testimonials.php");
    exit(); // Make sure to exit after a header redirect
} else {
    echo "Failed to delete: " . mysqli_error($conn);
}
?>
