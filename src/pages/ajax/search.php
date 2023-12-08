<?php 
require("../../../php/conn.php");
if(isset($_GET["search"])){
    $search=$_GET["search"];
    $query="SELECT `ProjectID`, `ProjectTitle`, `DescriptionProject`, `CategoryID`, `SubCategoryID`, `userid` FROM `projects` WHERE ProjectTitle LIKE '$search%'";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $tab[]=$row;
        }
        echo  json_encode($tab);
       
    }
   
}