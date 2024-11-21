<?php
session_start();

if (!isset($_SESSION['pg16_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: Lv8-Vuln");
    exit; 
} 
$_SESSION['pg17_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 8</title>
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
            <h1 class="title">Identification and Authentication Failures Mitigation x2</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext">
            <b>Congratulations! You successfully performed a brute force attack!</b><br>
            It is important for developers to implement input throttling to mitigate the effectiveness of a<br>
            brute force or password spraying attack. Otherwise, account compromise becomes trivial.
            </p>
            <br>
            <a href="../../end.php"><button class="btn btn-secondary mb-4" style="font-size: 1.2rem">Continue to Level 9</button></a>

        <div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>