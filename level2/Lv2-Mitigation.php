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
    <link rel="stylesheet" href=../Style.css> 
</head>
<body text="white">
    <?php include "../includes/nav.php"; ?>
    <div class="flex-container">
        <div class="sidebarcontainer">
            <?php include "../includes/sidebar.php"; ?>
        </div>
        <div class="main-content">
            <section class="content">
            <h1 class="title">XSS Mitigation</h1>
            <br>
            <p class="bodytext"><b>Congratulation! You used an reflected XXS attack to pass level 2.</b><br>
            The below left image is of the code you have just exploited to inflict an XXS attack on the webpage.<br> 
            On the right is the secure version of this code to prevent XSS attacks. As can be seen, the 'innertext' method has been<br> 
            implimented within the JS to prevent input execution of tags such as &lt;script&gt; and sanitise everything as plain text. <br> 
            Please continue to level 3: 
            <p>
            <br>
            <a href="../level3/Lv3-Login.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Level 3</button></a>

            <img src="../images/xss-vuln-img.png" alt="vuln" class="imagepos">
            <img src="../images/xss-secure-img.png" alt="secure" class="image2pos">
        <div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>


