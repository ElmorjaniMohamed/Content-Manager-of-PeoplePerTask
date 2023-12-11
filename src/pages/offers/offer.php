<?php  
session_start();
require ("../../../php/conn.php");
    if (isset($_POST["Description"])&&isset($_POST["id_project"])&&isset($_POST["Deadline"])&&isset($_POST["Price"])) {
        $id=$_POST["id_project"];
        $Description=$_POST["Description"];
        $id_freelancer= $_SESSION['userid'];
        $Deadline=$_POST["Deadline"]; 

        $Price=$_POST["Price"];

        $query="INSERT INTO `offers`(`Description`, `Amount`, `Deadline`, `FreelancerID`, `ProjectID`) VALUES ('$Description',$Price,'$Deadline',$id_freelancer,$id)";
        $res=mysqli_query($conn,$query);
        if($res)echo"success";
        else echo "something wrong!!!";

    }
  ?>