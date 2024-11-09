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

        <link rel="stylesheet" href=style.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="images/logo.png" alt="navbarlogo" class="logo">

    <a href ="index.php" class="button">Home</a>

</nav>

<section class="content">
    <h1 class="title">Cryptographic Failiure Mitigation</h1>

<p>You successfully cracked the MD5 hash to get to the next level. <br> As can be seen on the left, the passwords have been applied with a unsalted weak hash algorithm MD5. <br> On the right a secured hash algorithm has been applied named SHA-256.  <p>


<div class="container">
    <a href="Lv5-End.php"><button class="btn">Continue to Level 5</button></a>
</div>



<img src="images/cf-secured-img.png" alt="secure" class="xsssecure" >
<img src="images/cf-vuln-img.png" alt="secure" class="xssvuln" >



<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>