<?php
session_start();

if (!isset($_SESSION['pg13_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: ../level6/Lv6-Mitigation2016");
    exit; 
} 
$_SESSION['pg14_complete'] = true;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Style.css">
</head>
<body text="white">
    <?php include "../includes/nav.php"; ?>
    <div class="flex-container">
        <div class="sidebarcontainer">
            <?php include "../includes/sidebar.php"; ?>
        </div>
        <div class="main-content">
            <section class="content">
                <h1 class="title">Level 7: Identification and Authentication Failures</h1>
                <br>
                <p class="bodytext"> Broken Authentication gained the no2 spot in the 2017 Owasp Top 10, and the no7 spot in the 2021<br>
                Top 10 where it was renamed Identification and Authentication Failures, this web<br>
                application risk can present itself in many ways, from plain text passwords,<br>
                to insecure multi-factor authenticaiton, and insecure sessions.
                </p>
                <br>
                <a href="../level7/Lv7-Vuln-Session.php"><button class="btn btn-secondary mb-4" style="width: 300px;">continue</button></a>
            </section>  
        </div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>