<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../level1/Lv1-Vuln.php");
    exit;
} 

include("../conn.php");
$username = $_POST['username'];
// hash MD5
$password = md5($_POST['password']);  

// $password = hash('sha256', $_POST['password']); // hash with SHA-256 

// Login query using prepared statment to avoid auth bypass
$stmt = $conn->prepare(" SELECT * FROM users WHERE user = ? AND password = ?"); 
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$queryresult = $stmt->get_result();
if($queryresult && mysqli_num_rows($queryresult) > 0) {
    $data = mysqli_fetch_assoc($queryresult);
    $_SESSION['user_id'] = $data['user_id'];
    $user_id = $data['user_id'];

    $timeupdatequery = "UPDATE users SET last_login = CURRENT_TIMESTAMP WHERE user_id = $user_id ";
    mysqli_query($conn, $timeupdatequery);

    if($_SESSION['user_id'] == 1){ // destination dependent on if session id = Admin
        header("Location: Lv3-Access-Admin.php");
        exit();
    }
    if($_SESSION['user_id'] !== 1){
        header("Location: Lv3-Access-Guest.php");
        exit();
    }
}   else{
    // Set error message and redirect back to login page 
    $_SESSION['error'] = 'Invalid username or password'; 
    header("Location: Lv3-Login"); 
    exit(); 
}
?>
