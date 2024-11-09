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
                <h1 class="title">Level 5: Temp</h1>
                <br>
                <p class="bodytext">Whats next!
                <p>
                <br>
                <a href="Lv5-Vuln.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Do something</button></a>
                
            </section>  
        </div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>
