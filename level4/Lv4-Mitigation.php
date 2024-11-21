<?php
session_start();

if (!isset($_SESSION['pg8_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: Lv4-Vuln");
    exit; 
} 
$_SESSION['pg9_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 4</title> 
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
            <h1 class="title">Cryptographic Failure Mitigation</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext">
            <b>Congratulations! You cracked the weak MD5 password hash.</b><br>
            As can be seen in the below left image, the passwords have been applied with an unsalted weak hashing algorithm MD5. <br>
            However, in the right image a secure hashing algorithm has been applied named SHA-256, which is significantly <br>
            harder to crack due to its more robust algorithm. <br>
            <p>
            <br>
            <a href="../level5/Lv5-Vuln.php"><button class="btn btn-secondary mb-4" style="font-size: 1.2rem">Continue to Level 5</button></a>

            <img src="../images/cf-secured-img.png" alt="secure" class="image2pos" >
            <img src="../images/cf-vuln-img.png" alt="secure" class="imagepos" >
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>