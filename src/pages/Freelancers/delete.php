<?php
include("../../../php/conn.php");

$id = $_GET['id'];

$sql = "DELETE FROM `freelancers` WHERE FreelancerID = $id";
$res = mysqli_query($conn, $sql);

if($res){
    mysqli_close($conn);
    header("location:Freelancers.php");
}

?>