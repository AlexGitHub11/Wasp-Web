<!DOCTYPE html>


<html>

    <head>

        <link rel="stylesheet" href=Style.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="images/logo.png" alt="navbarlogo" class="logo">

    <a href ="index.php" class="button">Home</a>

</nav>

<section class="content">
    <h1 class="title"></h1>

<?php

session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: Lv1-Vuln.php");
    exit;
    
} 

include("conn.php");

$username = $_POST['username'];
$password = md5($_POST['password']);  // hash MD5
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
        die;
    }
    
    if($_SESSION['user_id'] !== 1){

        header("Location: Lv3-Access-Guest.php");
        die;
    }

}   else{
    echo "Invalid username or password";
    
}

?>

<div class="container">
    <a href="Lv3-Login.php"><button class="btn">Return to login page</button></a>
</div>


<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>