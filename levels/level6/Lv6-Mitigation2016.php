<?php
session_start();

if (!isset($_SESSION['pg12_complete']) && !isset($_SESSION['user_id'])) {
    header("Location: Lv6-Vuln");
    exit; 
} 
$_SESSION['pg13_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 6</title>
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
            <h1 class="title">Insufficient Logging & Monitoring Mitigation</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext">
            <b>Congratulations! You successfully analysed the log files.</b><br>
            This task was to demonstrate the importance of logging and monitoring system and network  <br>
            activity. Without this data there would be no way to identify and mitigate security breaches. <br>
            </p>
            <br>
            <a href="../level7/Lv7-Vuln.php"><button class="btn btn-secondary mb-4" style="font-size: 1.2rem">Continue to Level 7</button></a>
        <div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>