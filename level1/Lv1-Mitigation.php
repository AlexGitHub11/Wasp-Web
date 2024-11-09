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
            <br>
            <p class="bodytext"><b>Congratulation! You used an SQLi to cause authentication bypass.</b><br>
            The below left image is of the code you have just exploited to bypass the login.<br> 
            On the right is the secure version of this code to prevent the authentication bypass, <br> 
            As can be seen, a prepared statement has been implimented to prevent SQLi attacks. <br>
            Please continue to level 2: 
            <p>
            <br>
            <a href="../level2/Lv2-Vuln.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Level 2</button></a>

            <img src="../images/sql-vuln-img.png" alt="vuln" class="imagepos">
            <img src="../images/sql-secure-img.png" alt="secure" class="image2pos">
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>