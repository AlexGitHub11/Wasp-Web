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
                <h1 class="title">Level 8: Identification and Authentication Failures x2</h1>
                <br>
                <p class="bodytext">As mentioned in level 7 there are many possible ways an Identification<br> 
                 and Authentication Failure can exist within a web application. <br>
                Another example would be failing to implement input throttling. <br>
                Access the admins account:
                <br><br>
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
    <?php include "../includes/footer.php"; ?>
</body>
</html>