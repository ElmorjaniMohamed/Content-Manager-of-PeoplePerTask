<?php
include("../../php/conn.php");

$id = $_GET['id'];

$sql = "DELETE from users where userid = $id";
$res = mysqli_query($conn, $sql);

if($res){
    mysqli_close($conn);
    header("location:users.php");
}

?>