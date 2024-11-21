<?php
session_start();

if (!isset($_SESSION['pg5_complete'])) {
    header("Location: ../level2/Lv2-Mitigation.php");
    exit; 
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 3</title>  
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
                <h1 class="title">Level 3: Broken Access Control (BAC)</h1>
                <hr style="border-top: 2px solid rgb(68, 72, 77);">
                <br>
                <p class="bodytext">Broken Access Control attacks gained the no.5 spot on the OWASP Top 10 in 2017. Exploit<br> 
                 a misconfigured database login system to gain admin privilege via a BAC attack.
                <br><br>
                <p class="bodytext"><b>WASP Web Database Portal</b></p>

                <!-- Login form -->
                <form method="POST" action="lv3-Conn" >
                    <div class="form-group mb-4">
                        <label class="bodytext" for="username">Username:</label>
                        <input  type="text" name="username">
                    </div>
                    <div class="form-group mb-4">
                        <label class="bodytext" for="password">Password:</label>
                        <input type="password" name="password">
                    </div>

                    <!-- Display error message if login fails -->
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?php 
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <button class="btn btn-secondary mb-4" style="width: 150px;" type="submit" name="submit" value="Login">Login </button>
                    <p class="bodytext">Join today: <a href="Lv3-Reg.php">Register here!</a></p>
                </form> 
            </section>  
        </div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>
