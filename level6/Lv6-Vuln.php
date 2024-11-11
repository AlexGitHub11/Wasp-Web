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
                <h1 class="title">Level 6: Insufficient Logging & Monitoring </h1>
                <br>
                <p class="bodytext">Insufficient Logging & Monitoring gained the no10 spot on the 2017 OWASP <BR>
                Top 10 and the no9 spot on the 2021 Top 10, under the updated name 'Security Logging and Monitoring Failures'. <br>
                This level tests your ability to logging and moniroting to aid a digital forensics investigation.
                <p>
                <br>
                <p class="bodytext">View the below log files taken from a comprimised system. <br>
                Research the payload that was used for priviledge escalation on the system <br>
                and identify the year of the CVE. then navigate to: 
                <i>http://waspweb/level6/Lv6-Mitigation<b>[YYYY]</b>.php</i>
                </p>
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
