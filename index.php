<?php 
session_start();
$_SESSION['pg1_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
                <hr style="border-top: 2px solid rgb(68, 72, 77);">
                <br>
                <p class="bodytext">
                    WASP Web is a deliberately vulnerable web application with the intent to test users on their software security skills. <br>
                    Users can complete all 10 levels by exploiting a different OWASP Top 10 vulnerability at each level. <br>
                    Complete all 10 levels to get the Wasp Web certificate.
                </p>
                <br>
                <br>
                <br>
                <p class="alert alert-info">
                     Some of the OWASP Top 10 entries, are out of this project's scope. Therefore some levels may <br>
                     belong to the same OWASP Top 10 entire. In addition, this project takes from both the 2017 <br> 
                     and 2021 top 10 resulting in some overlap of vulnerabilities.
                </p>
                <br>
                <a href="../level1/Lv1-Login.php"><button class="btn btn-secondary mb-4" style="font-size: 1.2rem">Continue to Level 1</button></a>
            </section>
        </div>
            
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>


