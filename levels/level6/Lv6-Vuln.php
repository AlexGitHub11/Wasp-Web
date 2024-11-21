<?php
session_start();

if (!isset($_SESSION['pg11_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: ../level5/Lv5-Mitigation");
    exit; 
} 
$_SESSION['pg12_complete'] = true;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Level 6</title>
    <link rel="stylesheet" href="../../Style.css">
</head>
<body text="white">
    <?php include "../../includes/nav.php"; ?>
    <div class="flex-container">
        <div class="sidebarcontainer">
            <?php include "../../includes/sidebar.php"; ?>
        </div>
        <div class="main-content">
            <section class="content">
                <h1 class="title">Level 6: Insufficient Logging & Monitoring </h1>
                <hr style="border-top: 2px solid rgb(68, 72, 77);">
                <br>
                <p class="bodytext">
                Insufficient Logging & Monitoring gained the no.10 spot on the 2017 OWASP Top 10 and the no.9 spot on the  <br>
                2021 Top 10, under the updated name 'Security Logging and Monitoring Failures'. This level  <br>
                tests your logging and monitoring ability to aid a digital forensics investigation.
                <p>
                <br>
                <p class="alert alert-info">
                View the below log files taken from a compromised system. Research the payload that was used for privilege escalation<br>
                on the system and identify the year of the CVE. Then navigate to: <b>http://waspweb/level6/Lv6-MitigationYYYY.php</b>
                </p>
                <br>
                <br>
                <button class="btn btn-secondary mb-4" onclick="openImage()" style="font-size: 1.2rem">View System Log Files</button> 
                
                <!-- Open log file -->
                <script> function openImage() { 
                    window.open('../../images/logfile.png', '_blank'); }
                </script>

            </section>  
        </div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>
