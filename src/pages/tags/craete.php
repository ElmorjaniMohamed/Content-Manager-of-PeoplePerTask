<?php
// Connection
require("../../../php/conn.php");

if (isset($_POST["id_tag"])&&isset($_POST["id_project"])) {

    $id_tag = $_POST["id_tag"];
   $id_project = $_POST["id_project"];

$sql = "INSERT INTO `project_tag`(`tag_id`,project_id) VALUES ($id_tag,$id_project)";
$insertResult = mysqli_query($conn, $sql);
}



if ($insertResult) {
    header("Location: ../profileuser.php?msg=New record created successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}
// Close the connection
mysqli_close($conn);



?>