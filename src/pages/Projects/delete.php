

<?php
include("../../../php/conn.php");

$ProjectID = $_GET['id'];

$sql = "DELETE FROM `projects` WHERE ProjectID = $ProjectID";
$res = mysqli_query($conn, $sql);

if($res){
    mysqli_close($conn);
    header("location:projects.php");
}

?>