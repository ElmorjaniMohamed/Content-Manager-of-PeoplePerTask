<?php
// Connection
require("../../../php/conn.php");

if (isset($_POST["submit"])) {

    $CategoryID = $row['CategoryID'];
    $CategoryName = $_POST["CategoryName"];
    $Description = $_POST["Description"];

}

$sql = "INSERT INTO categories (`CategoryName`, `Description`) VALUES ('$CategoryName', '$Description')";
$insertResult = mysqli_query($conn, $sql);

if ($insertResult) {
    header("Location: Categories.php?msg=New record created successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);



?>