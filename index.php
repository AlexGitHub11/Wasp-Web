<?php 
session_start()
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Style.css">
</head>
<body text="white">
    <?php include "includes/nav.php"; ?>
    <div class="flex-container">
        <div class="sidebarcontainer">
            <?php include "includes/sidebar.php"; ?>
        </div>
        <div class="main-content">
            <section class="content">
                <h1 class="title">WASP Web</h1>
                <br>
                <p class="bodytext">WASP Web is a deliberately vulnerable web application with the intent to test users <br>
                    on their software security skills. Users can complete all 10 levels by exploiting a different OWASP Top 10 <br> 
                     vulnerability at each level. Complete all 10 levels to get the WASP Web certificate.
                     <br>
                     <br>
                    <i><b>Some of the OWASP Top 10 entires, are out of this projects scope, <br> 
                     therefour some levels may belong to the same top 10 entry.<br>
                     In addition, this project takes from both the 2017 and 2021<br>
                     entries resulting in some overlap of vulnerabilities.</b></i>
                    </p>
                <br><br>
                <a href="../level1/Lv1-Login.php"><button class="btn btn-secondary mb-4" style="font-size: 1.7rem">Continue to Level 1</button></a>
            </section>
        </div>
            
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>


