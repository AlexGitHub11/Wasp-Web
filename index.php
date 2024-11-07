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
                <h1 class="title">OWASP Web</h1>
                <br>
                <p class="bodytext">OWASP Web is a deliberately vulnerable web application with the intent to test users <br>
                    on their software security skills. Users can complete all 10 levels by exploiting a different OWASP Top 10 <br> 
                     vulnerability at each level. Complete all 10 levels to get the OWASP Web certificate.</p>
                <br><br>
                <a href="Lv1-Login.php"><button class="btn btn-secondary mb-4" style="font-size: 1.7rem">Continue to Level 1</button></a>
            </section>
        </div>
            
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>


