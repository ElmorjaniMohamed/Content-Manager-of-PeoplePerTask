<?php
require("../../../php/conn.php");

if (isset($_GET["Categories"])) {
    $Categories = $_GET["Categories"];

    $query = "SELECT `ProjectID`, `ProjectTitle`, `DescriptionProject`,`SubCategoryID`, `userid`, `categories`.`CategoryName` FROM `projects`
    INNER JOIN `categories` ON `projects`.`CategoryID`=`categories`.`CategoryID`
    WHERE `categories`.`CategoryName` LIKE '%$Categories%' ";

    $res = mysqli_query($conn, $query);

    $Categories = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $Categories[] = $row;
    }

    echo json_encode($Categories);
}

?>
