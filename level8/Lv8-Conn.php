<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../level1/Lv1-Vuln.php");
    exit;
} 

include("../includes/conn.php");
$username = $_POST['username'];
$password = md5($_POST['password']);  

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

    if($_SESSION['user_id'] == 1){ 
        header("Location: Lv8-Mitigation");
        exit();
    }
    
}   else{
    $_SESSION['error'] = 'Invalid username or password'; 
   
    exit(); 
}
?>
