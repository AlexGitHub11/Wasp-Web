<?php
session_start();

if (!isset($_SESSION['pg2_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: Lv1-Vuln.php");
    exit; 
} 
$_SESSION['pg3_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 1</title>
    <link rel="stylesheet" href=../Style.css> 
</head>
<body text="white">
    <?php include "../includes/nav.php"; ?>
    <div class="flex-container">
        <div class="sidebarcontainer">
            <?php include "../includes/sidebar.php"; ?>
        </div>
        <div class="main-content">
            <section class="content">
            <h1 class="title">SQL Injection Mitigation</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext"><b>Congratulations! You used an SQLi to cause authentication bypass.</b><br>
            The below left image is of the code you have just exploited to bypass the login. On the right<br> 
             is the secure version of this code to prevent the authentication bypass, as can be <br> 
             seen, a prepared statement has been implimented to prevent SQLi attacks. 
            <p>
            <br>
            <a href="../level2/Lv2-Vuln.php"><button class="btn btn-secondary mb-4" style="font-size: 1.2rem">Continue to Level 2</button></a>

            <img src="../images/sql-vuln-img.png" alt="vuln" class="imagepos">
            <img src="../images/sql-secure-img.png" alt="secure" class="image2pos">
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>