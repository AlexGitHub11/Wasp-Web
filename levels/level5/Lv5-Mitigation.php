<?php
session_start();

if (!isset($_SESSION['pg10_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: Lv5-Vuln");
    exit; 
} 
$_SESSION['pg11_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 5</title>
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
            <h1 class="title">Insecure Design Mitigation</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext"><b>Congratulations! You identified the hard-coded credential.</b><br>
            As you discovered, the correct value for the combination input field was hard coded into the source. This <br>
             is a huge lapse in security, and the value should instead be stored server-side to ensure secure validation.<br>
            </p>
            <br>
            <a href="../level6/Lv6-Vuln.php"><button class="btn btn-secondary mb-4" style="font-size: 1.2rem">Continue to Level 6</button></a>
        <div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>