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
            <br>
            <p class="bodytext"><b>Congratulation! You cracked the hash.</b><br>
            As can be seen in the below left image, the passwords have been applied <br>
            with an unsalted weak hashing algorithm MD5. However in the right image <br>
            a secure hashing algorithm has been applied named SHA-256 which is significantly <br>
            harder to crack due to its more robust algorithm. <br>
            Please continue to level 5:
            <p>
            <br>
            <a href="../level5/Lv5-Vuln.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Level 5</button></a>

            <img src="../images/cf-secured-img.png" alt="secure" class="image2pos" >
            <img src="../images/cf-vuln-img.png" alt="secure" class="imagepos" >
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>