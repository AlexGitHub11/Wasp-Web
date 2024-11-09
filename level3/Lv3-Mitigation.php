<?php

session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: ../level1/Lv1-Vuln.php");
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
    <h1 class="title">Broken Access Mitigation</h1>

<p>You successfully achived broken access via direct access to the admin page, the below image on the left has no authenticationn however. <br> As can be seen on the right, authentication has been applied. To view the page the user must be authenticated, else they will not gain access.  <p>


<div class="container">
    <a href="Lv4-Vuln.php"><button class="btn">Continue to Level 4</button></a>
</div>



<img src="images/bac-secured-img.png" alt="secure" class="xsssecure" >
<img src="images/bac-vuln-img.png" alt="secure" class="xssvuln" >



<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>