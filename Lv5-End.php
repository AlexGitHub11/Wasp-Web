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
    <h1 class="title">Well done! You completed OWASP Web!</h1>

<p>You successful exploited the OWASP Web!. <br><br> Level 1: Injection via an SQL authentication bypass attack!.<br> Level 2: XSS attack via a XSS redirection. <br> Level 3: Broken access control via a the lack of session authenticaiton. <br> Level 4: Cryptographic Failiure via depricated hashing algorithm.<p>


<br><br><img src="images/owasp.png" alt="cyber" class="owasp">


<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>