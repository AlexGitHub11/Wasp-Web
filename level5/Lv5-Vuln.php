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
                <h1 class="title">Level 5: Insecure Design</h1>
                <br>
                <p class="bodytext">Insecure design gained the no4 spot in the 2021 OWASP Top 10, <br>
                This is a new addition to the Top 10 and relates to any risk present within the design. <br>
                Identify the insecure design to complete this level. 
                <p>
                <br>
                <p class="bodytext">Enter the combination </p>

                <!-- Combination box -->
                <div> 
                    <input type="text" class="code-input" maxlength="1" id="val1"> 
                    <input type="text" class="code-input" maxlength="1" id="val2"> 
                    <input type="text" class="code-input" maxlength="1" id="val3"> 
                    <input type="text" class="code-input" maxlength="1" id="val4"> 
                </div>
                <br>
                <button class="btn btn-secondary mb-4" onclick="checkCombo()">Submit</button> <p id="submit">

                <!-- Validate input -->
                <script>
                    function checkCombo() {
                        var val1 = document.getElementById('val1').value;
                        var val2 = document.getElementById('val2').value;
                        var val3 = document.getElementById('val3').value;
                        var val4 = document.getElementById('val4').value;
                        combination = val1 + val2 + val3 + val4;
                        
                        var submitElement = document.getElementById('submit');
                        if ( combination === "3389" ) { 
                            submitElement.innerHTML = '<div class="alert alert-success" role="alert">Code is correct!</div>';
                            window.location.href = "Lv5-Mitigation.php"
                        } else {
                            submitElement.innerHTML = '<div class="alert alert-danger" role="alert">Code is Incorrect!</div>';
                        }
                    }
                </script>
            </section>  
        </div>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>
