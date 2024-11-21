<?php
session_start();

if (!isset($_SESSION['pg3_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: ../level1/Lv1-Mitigation.php");
    exit; 
} 
$_SESSION['pg4_complete'] = true;
?>

<!DOCTYPE html>

<html>
<head>
    <title>Level 2</title>
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
            <h1 class="title">Level 2: Cross Site Scripting (XXS)</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext">XSS attacks gained the no.7 spot on the OWASP top 10 in 2017. Exploit<br>
              the insecure JavaScript in this webpage to cause a XXS redirection attack.
            <p>
            <br>
            <h2 class="bodytext"> Comment your thoughts below:</h2>
            <textarea class="form-control" id="txt" placeholder="Add comment here..."></textarea> <! -- Defining comment box and button -- >
            <br>
            <div class="btn2">
                <input class="btn btn-secondary mb-4" type="button" id="buttn" value="Comment">
            </div>
            <div class="container mt-5">
                <div class="card" id="output"> 
                    <p class="bodytext"><br>I thought PHP was dead<br>
                    <br>This comment box is fake, horrendous!<br>
                    <br>The developer needs to get better at JS and html!<br>
                    <br>What is a network engineer's favorite index fund? SNMP 500 XD<br>
                    <br>XSS is a great attack vector<br>
                    <br>This is not as good as StackOverflow<br>
                    <br>&lt;script&gt;&lt;img title="&lt;/script&gt;&lt;img src onerror=alert("Close")&gt;"&gt;&lt;/script&gt;<br>
                    <br>&lt;script&gt;&lt;img title=“&lt;/script&gt;&lt;img src onerror=window.location.href="http://waspweb/level2/Lv2-Mitigation.php"&gt;”&gt;&lt;/script&gt;</p>
                </div>
            </div>
        </div>
    
        <script> 
            // JS gets user input and ammends input to comments box
            const txtbox = document.getElementById('txt');
            const button = document.getElementById('buttn');
            const output = document.getElementById('output');

            function getoutput(){
                // Add user input with black text color
                output.innerHTML += '<span class="bodytext">' + txtbox.value + '</span><br>'; 
                
                // Prevents XSS by sanitizing all data as text and not executing any HTML or JS
                // output.innertext = txtbox.value; 
            }
            button.addEventListener('click', getoutput);
        </script>

    </div>
    <?php include "../includes/footer.php"; ?>
</body>
</html>