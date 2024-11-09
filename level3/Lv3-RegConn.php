<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../level1/Lv1-Vuln.php");
    exit;
}
    
include("../includes/conn.php");

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (!empty($username) && !empty($password)) {
    // hash with MD5 
    $hashed_password = md5($password); 

    // $hashed_password = hash('sha256', $password); // hash with SHA-256 

    if (mysqli_connect_error()) {
        $_SESSION['message'] = 'Could not connect to database (' . mysqli_connect_errno() . ') ' . mysqli_connect_error();
        header("Location: registration_form.php");
        exit;
    } else {
        $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hashed_password')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "New user has been registered";
        } else {
            $_SESSION['message'] = "Error! Please try again";
        }
        $conn->close();
        header("Location: Lv3-Reg");
        exit;
    }
} else {
    $_SESSION['message'] = "Enter both username and password";
    header("Location: Lv3-Reg");
    exit;
}
?>
