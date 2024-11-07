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
                <h1 class="title">Level 1: SQL Injection</h1>
                <br>
                <p class="bodytext">Injection attacks are one of the most common web hacking techniques.<br> 
                In fact, it was the no1 OWASP vulnerability in the 2017 Top 10 and is the no3 vulnerability<br>
                in the 2021 Top 10. Bypass this login portal by exploiting an insecure SQL query.
                <p>
                <br>
                <!-- If only Authentication bypass was as simple as 1 = 1 -->


                <!-- Login form -->
                <form method="POST" action="lv1-Vuln" >
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
                </form> 
            </section>  
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>