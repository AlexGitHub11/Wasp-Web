<?php
session_start();

if (!isset($_SESSION['pg14_complete']) && !isset($_SESSION['user_id'])) {
    header("Location: Lv7-Vuln-Session");
    exit; 
} 
$_SESSION['pg15_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 7</title>
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
            <h1 class="title">Identification and Authentication Failures Mitigation</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext">
            <b>Congratulations! You successfully used a session cookie to hijack the admin's session.</b><br>
            In the below left image you can see the code you have exploited to hijack the session, as can be seen there is no <br>
            security implemented to prevent session manipulation. However on the right is an image of the secured <br>
            PHP session, here the session is secured with HTTPS, restricted cookies and cookie validation. <br>
            </p>
            <br>
            <a href="../level8/Lv8-Vuln.php"><button class="btn btn-secondary mb-4" style="font-size: 1.2rem">Continue to Level 8</button></a>

            <img src="../../images/iaf-secure-img.png" alt="secure" class="image2pos" >
            <img src="../../images/iaf-vuln-img.png" alt="secure" class="imagepos" >
        <div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>