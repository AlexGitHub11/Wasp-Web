<?php
session_start();

if (!isset($_SESSION['pg4_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: Lv2-Vuln.php");
    exit; 
} 
$_SESSION['pg5_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 2</title>
    <link rel="stylesheet" href=../../Style.css> 
</head>
<body text="white">
    <?php include "../../includes/nav.php"; ?>
    <div class="flex-container">
        <div class="sidebarcontainer">
            <?php include "../../includes/sidebar.php"; ?>
        </div>
        <div class="main-content">
            <section class="content">
            <h1 class="title">Cross Site Scripting (XXS) Mitigation</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext">
            <b>Congratulations! You exploited insecure JavaScript via an reflected XXS attack.</b><br>
            The below left image is of the code you have just exploited to cause an XXS attack on the webpage. On the right, is the <br> 
            secure version of this code to prevent XSS attacks. As can be seen, the 'innertext' method has been implemented  <br> 
            within the JS to prevent input execution of tags such as &lt;script&gt; and sanitise all user input as plain text. <br> 
            <p>
            <br>
            <a href="../level3/Lv3-Login.php"><button class="btn btn-secondary mb-4" style="font-size: 1.2rem">Continue to Level 3</button></a>

            <img src="../../images/xss-vuln-img.png" alt="vuln" class="imagepos">
            <img src="../../images/xss-secure-img.png" alt="secure" class="image2pos">
        <div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>


