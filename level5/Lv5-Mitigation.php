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
            <h1 class="title">Insecure Design Mitigation</h1>
            <br>
            <p class="bodytext"><b>Congratulation! You identified the hard coded credential.</b><br>
            As you discovered, the correct value for the combination input field was hard coded into the source, <br>
            This is a huge lapse in security, and the value should instead be stored serverside to ensure secure validation.
            </p>
            <br>
            <a href="../level5/Lv5-Vuln.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Level 5</button></a>
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>