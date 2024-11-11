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
            <h1 class="title">Identification and Authentication Failures Mitigation</h1>
            <br>
            <p class="bodytext"><b>Congratulation! You successfully used a session cookie to hijack the admin's session!</b><br>
            In the below left image you can see the code you have exploited to hijack the session, as can bee seen <br>
            there is no security implimented to prevent session manipulation. However on the right is a image of the <br>
            secured php session, here the session is secured with HTTPS, restricted cookies and cookie validation. <br>
            Please continue to level 8:
            
            </p>
            <br>
            <a href="../level8/Lv8-Vuln.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Level 8</button></a>

            <img src="../images/iaf-secure-img.png" alt="secure" class="image2pos" >
            <img src="../images/iaf-vuln-img.png" alt="secure" class="imagepos" >
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>