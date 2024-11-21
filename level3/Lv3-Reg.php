<?php
session_start();

if (!isset($_SESSION['pg5_complete'])) {
    header("Location: Lv3-Login");
    exit; 
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 3</title> 
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
                <p class="bodytext"><b>Register Here</b></p>
                

                <!-- Register form -->
                <form method="POST" action="Lv3-RegConn.php" >
                    <div class="form-group mb-4">
                        <label class="bodytext" for="username">Username:</label>
                        <input  type="text" name="username">
                    </div>
                    <div class="form-group mb-4">
                        <label class="bodytext" for="password">Password:</label>
                        <input type="password" name="password">
                    </div>

                    <!-- Display error message if login fails -->
                    <?php if (isset($_SESSION['message'])): ?>
                        <div class="alert alert-info">
                            <?php 
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <button class="btn btn-secondary mb-4" style="width: 150px;" type="submit" name="submit" value="Register">Register </button>
                    <p class="bodytext">Already a user: <a href="Lv3-Login.php">Login here!</a></p>
                </form> 
            </section>  
        </div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>

