<?php
session_start(); 

include("../../includes/conn.php");

$username = $_POST['username'];
$password = $_POST['password']; 

$sqlquery = " SELECT * FROM users WHERE user = '$username' AND password = '$password'";
$queryresult = mysqli_query($conn, $sqlquery);

if($queryresult && mysqli_num_rows($queryresult) > 0) {
    $data = mysqli_fetch_assoc($queryresult);
    $_SESSION['user_id'] = $data['user_id']; // set session id to user id from db

    $user_id = $data['user_id']; // store user id into var

    $timeupdatequery = "UPDATE users SET last_login = CURRENT_TIMESTAMP WHERE user_id = $user_id "; // update last_login field in db
    mysqli_query($conn, $timeupdatequery); // execute update query

    header("Location: Lv1-Mitigation.php");
    exit();

}   else{
        // Set error message and redirect back to login page 
        $_SESSION['error'] = 'Invalid username or password'; 
        header("Location: Lv1-Login.php"); 
        exit();
}

/*  Prepared statement to mitigate SQLi

$stmt = $conn->prepare(" SELECT * FROM customer WHERE First_Name = ? AND Password = ?"); 
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$queryresult = $stmt->get_result();

if($queryresult && mysqli_num_rows($queryresult) > 0) {

    $data = mysqli_fetch_assoc($queryresult);
    
    header("Location: lv1mitigations.php");
    die;

}   else{
    $_SESSION['error'] = 'Invalid username or password'; 
    header("Location: login.php"); 
    exit
}
*/
?>