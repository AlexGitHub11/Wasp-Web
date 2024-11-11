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
            <h1 class="title">Broken Access Mitigation</h1>
            <br>
            <p class="bodytext"><b>Congratulation! You used an IDOR attack to exploit a system with broken access.</b><br>
            The below left image is of the code you have just exploited via Insecure Direct <br>
            Object Reference. (IDOR) As can bee seen there is no access control to ensure the <br>
            users session belongs to an admin. In the right image, the session is ensuring the user <br>
            is admin prior to the page being loaded.<br>
            Please continue to level 4: 
            <p>
            <br>
            <a href="../level4/Lv4-Vuln.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Level 4</button></a>

            <img src="../images/bac-vuln-img.png" alt="secure" class="image2pos" >
            <img src="../images/bac-secure-img.png" alt="secure" class="imagepos" >
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>
