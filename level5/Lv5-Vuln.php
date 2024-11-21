<?php
session_start();

if (!isset($_SESSION['pg9_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: ../level4/Lv4-Mitigation");
    exit; 
} 
$_SESSION['pg10_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 5</title>
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
                <hr style="border-top: 2px solid rgb(68, 72, 77);">
                <br>
                <p class="bodytext">
                Insecure design gained the no.4 spot in the 2021 OWASP Top 10, This is a new addition to the Top 10, <br>
                and relates to any risk present within the design. Identify the insecure design to complete this level. <br>
                </p>
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
                <button class="btn btn-secondary mb-4" onclick="checkCombo()" style="font-size: 1.2rem">Submit</button> <p id="submit">

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
