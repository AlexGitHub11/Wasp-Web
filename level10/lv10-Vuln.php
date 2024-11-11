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
                <h1 class="title">Level 10: </h1>
                <br>
                <p class="bodytext">Under development...
                <p>
                <br>
                <button class="btn btn-secondary mb-4" onclick="openImage()">View Log Files</button> 
                
                <!-- Open log file -->
                <script> function openImage() { 
                    window.open('../images/logfile.png', '_blank'); }
                </script>
            </section>  
        </div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>