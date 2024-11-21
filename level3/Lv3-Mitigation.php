<?php
session_start();

if (!isset($_SESSION['pg6_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: Lv3-Access-Guest");
    exit; 
} 
$_SESSION['pg7_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 3</title> 
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
            <h1 class="title">Broken Access Control (BAC) Mitigation</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext"><b>Congratulations! You used an IDOR attack to exploit a system with broken access Control.</b><br>
            The below left image is of the code you have just exploited via Insecure Direct Object Reference (IDOR). <br>
             As can bee seen there is no access control to ensure the users session belongs to an admin. <br>
             In the right image, the session is ensuring the user is admin prior to the page being loaded. <br>
            <p>
            <br>
            <a href="../level4/Lv4-Vuln.php"><button class="btn btn-secondary mb-4" style="font-size: 1.2rem">Continue to Level 4</button></a>

            <img src="../images/bac-vuln-img.png" alt="secure" class="image2pos" >
            <img src="../images/bac-secure-img.png" alt="secure" class="imagepos" >
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>
