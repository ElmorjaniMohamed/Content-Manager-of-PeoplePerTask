<?php

require ("../../../php/conn.php");

if(isset($_POST["ProjectID"])){
    $ProjectID = $_POST["ProjectID"];

}

$sql = "SELECT * FROM projects WHERE ProjectsID= $ProjectID";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        
    }
}

?>