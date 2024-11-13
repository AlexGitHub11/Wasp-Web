<?php
session_start();

if (!isset($_SESSION['pg12_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: Lv6-Vuln");
    exit; 
} 
$_SESSION['pg13_complete'] = true;
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
            <h1 class="title">Insufficient Logging & Monitoring Mitigation</h1>
            <br>
            <p class="bodytext"><b>Congratulation! You successfully analysed the log files!</b><br>
            This task was to demonstrate the importance of logging and monitoring system and network activity. <br>
            Without this data there would be no way to identify and mitigate security breaches. <br>
            Please continue to level 7:
            </p>
            <br>
            <a href="../level7/Lv7-Vuln.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Level 7</button></a>
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>