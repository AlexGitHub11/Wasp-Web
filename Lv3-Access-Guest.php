<?php

session_start();


if (!isset($_SESSION['user_id'])) {

    header("Location: Lv3-Login.php");
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
    <h1 class="title">Guest priviledge</h1>

<p>Broken access can be gained through a range of attack vectors, sometimes its as simple as changing the URL. <br> -- Inspect --<p>

<! Just so i dont forget, admin access is through lv3Database-Admin.php>



<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>