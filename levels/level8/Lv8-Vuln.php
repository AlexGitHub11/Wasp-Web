<?php
session_start();

if (!isset($_SESSION['pg15_complete']) && !isset($_SESSION['user_id'])) {
    header("Location: ../level7/Lv7-Mitigation");
    exit; 
} 
$_SESSION['pg16_complete'] = true;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Level 8</title>
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
                <h1 class="title">Level 8: Identification and Authentication Failures x2</h1>
                <hr style="border-top: 2px solid rgb(68, 72, 77);">
                <br>
                <p class="bodytext">
                As mentioned in level 7, there are many possible ways an Identification and Authentication Failure can exist within.<br> 
                a web application Another example would be failing to implement input throttling. Access the admin's account: <br>
                <br>
                <br>
                <p class="bodytext"><b>Account login</b></p>

                <!-- Login form -->
                <form method="POST" action="Lv8-Conn.php" >
                    <div class="form-group mb-4">
                        <label class="bodytext" for="username">Username:</label>
                        <input  type="text" name="username">
                    </div>
                    <div class="form-group mb-4">
                        <label class="bodytext" for="password">Password:</label>
                        <input type="password" name="password">
                    </div>

                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger">
                            <?php 
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <button class="btn btn-secondary mb-4" style="width: 150px;" type="submit" name="submit" value="Login">Login </button>
                </form> 
            </section>  
        </div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>