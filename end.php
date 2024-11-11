<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: Lv1-Vuln.php");
    exit;
} 
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Style.css">
</head>
<body text="white">
    <?php include "includes/nav.php"; ?>
    <div class="flex-container">
        <div class="sidebarcontainer">
            <?php include "includes/sidebar.php"; ?>
        </div>
        <div class="main-content">
            <section class="content">
                <h1 class="title"><b>Congratulations!</b></h1>
                <br>
                <p class="bodytext">You have successfully completed
                <br>
                <br>
                <b>OWASP Web</b>
                </p>
                <button class="btn btn-secondary mb-4" onclick="openImage()">Get Certificate</button> 
                
                <script> function openImage() { 
                    window.open('../images/cert.png', '_blank'); }
                </script>
            </section>  
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>