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

<section class="content">
    <h1 class="title">SQL Injection Mitigation</h1>

<p>Seen below on the left is a image of the code you have just exploited to bypass the login function authentication.<br> On the right is the secure version of this code to prevent the authentication bypass, <br> As can be seen, a prepared statement has been implimented to prevent SQLi attacks. <br> <p>


<div class="container">
    <a href="Lv2-Vuln.php"><button class="btn">Continue to Level 2</button></a>
</div>

<img src="images/sql-vuln-img.png" alt="vuln" class="xssvuln">

<img src="images/sql-secure-img.png" alt="secure" class="xsssecure">


<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>