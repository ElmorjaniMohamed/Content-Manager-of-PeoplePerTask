<?php

include __DIR__ . "../../../php/conn.php";

session_start();

if (isset($_POST['submit'])) {
    signup();
} else if (isset($_POST["login"])) {
    login();
}


function signup()
{
    global $conn;

    // Check if the form is submitted using the POST method
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        // Handle the case when the form is not submitted
        echo 'Invalid request method';
        return;
    }

    // Perform server-side validation before proceeding
    $username = isset($_POST["username"]) ? test_input($_POST["username"]) : '';
    $email = isset($_POST["email"]) ? test_input($_POST["email"]) : '';
    $password = isset($_POST["password"]) ? test_input($_POST["password"]) : '';
    $role = isset($_POST['role']) ? test_input($_POST['role']) : '';

    // Perform additional backend validation as needed
    if (empty($username) || empty($email) || empty($password)) {
        echo 'All fields are required.';
        return;
    }

    if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
        echo 'Only letters and white space allowed for username.';
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.';
        return;
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
        echo 'Invalid password format.';
        return;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare a query
    $sql = "INSERT INTO users (username, email, Password, role) VALUES (?, ?, ?, ?)";

    // Prepare a statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'ssss', $username, $email, $hashedPassword, $role);

    // Execute the prepared statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {

        $_SESSION["username"] = $username;
        $_SESSION["userid"] = mysqli_insert_id($conn);
        $_SESSION["role"] = !empty($role) ? $role : 'admin';


        if ($role === 'Client') {

            $_SESSION['User'] = 'Client';
            header('Location: ../../index.php');
            exit();
        } elseif ($role === 'Freelancer') {

            $_SESSION['User'] = 'Freelancer';
            header('Location: ../../index.php');
            exit();
        } else {

            header('Location: dashboard.php');
        }
        echo 'Signup successful';
        header('Location: login.php');
        exit();

    } else {
        echo 'Error executing the statement.';
    }

    // Close the statement and the connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);



}
// Function to sanitize input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



function login()
{
    global $conn;

    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = isset($_POST['role']) ? test_input($_POST['role']) : '';

    if (empty($email) || empty($password)) {
        echo 'All fields are required.';
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.';
        return;
    }

    $sql = 'SELECT * FROM users WHERE email = ?';

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo 'Error preparing the query';
        return;
    }

    mysqli_stmt_bind_param($stmt, 's', $email);


    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $password_fetched = $row['Password'];
        $id=$row['userid'];
        // Check the password
        if (password_verify($password, $password_fetched)) {

            // Set cookies if 'remembre' is set
            if (isset($_POST['remembre'])) {
                setcookie('email', $email, time() + 12 * 60, '/');
                setcookie('password', $password, time() + 12 * 60, '/');
            }
            // Redirect to index.php
            if($role=='Admin'){
                 $_SESSION['role']='admin';
                 $_SESSION['id']=$id;

                 header("Location:./dashboard.php");
            }else if($role=='Freelancer') {
                $_SESSION['id']=$id;
            $_SESSION['User'] = 'Freelancer';
            header("Location: ../../index.php");}
            else{ 
            $_SESSION['User'] = 'Client';
            $_SESSION['id']=$id;

            header("Location: ../../index.php");
            }
            exit;

        } else {
            // Invalid password
            echo 'Invalid password';
            exit;
        }
    } else {
        // Invalid email
        echo 'Invalid email';
        exit;
    }


    // Close the prepared query
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>