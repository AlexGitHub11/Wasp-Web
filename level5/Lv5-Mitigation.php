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
            <h1 class="title">Insecure Design Mitigation</h1>
            <br>
            <p class="bodytext"><b>Congratulation! You identified the hard coded credential.</b><br>
            As you discovered, the correct value for the combination input field was hard coded into the source, <br>
            This is a huge lapse in security, and the value should instead be stored serverside to ensure secure validation.<br>
            Please continue to level 6:
            </p>
            <br>
            <a href="../level6/Lv6-Vuln.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Level 6</button></a>
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>