
<?php

session_start();


if (!isset($_SESSION['user_id'])) {

    header("Location: Lv1-Vuln.php");
    exit;
    
} 

?>

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

<?php

include("conn.php");

$username = $_POST['username'];
$password = md5($_POST['password']); // hash with MD5 
// $password = hash('sha256', $_POST['password']); // hash with SHA-256 

// Insert credentails into db

if (!empty($username)){
    if (!empty($password)) {
        
        if(mysqli_connect_error()){
            die('Could not connect to database ('.
                mysqli_connect_errno().')' .
                mysqli_connect_error());       
        }
        
        else {
            $sql = "INSERT INTO users (user, password) values ('$username', '$password')";
            if (mysqli_query($conn, $sql)){
                echo "New user has been registered successfuly! ";
            }
            
            else{
                echo "" . mysqli_error($conn);
            }
            $conn->close();
        }
    }
    else {
        echo "password filed required.";
        die();
    }
}
else {
    echo "Username filed required";
    die();
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