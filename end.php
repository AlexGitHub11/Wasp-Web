<?php
session_start();

if (!isset($_SESSION['user_id']) && $_SESSION['user_id'] !== 1 && !isset($_SESSION['pg17_complete'])) {   
    header('Location: ../levels/level8/Lv8-Mitigation');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Well Done!</title>
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
                <hr style="border-top: 2px solid rgb(68, 72, 77);">
                
                <p class="bodytext">You have successfully completed:
                <br>
                <br>
                <b style="font-size: 30px;">WASP Web</b>
                <br>
                </p>    
                <img src="../images/top-10.png" alt="secure" class="owasp" >
                <button class="btn btn-secondary mb-4" onclick="openImage()" style="font-size: 1.2rem">Get Certificate</button> 
                <script> function openImage() { 
                    window.open('decrypt-cert.php?decrypt=true', '_blank'); }
                </script>
            </section>  
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>