<?php

session_start();


if (!isset($_SESSION['user_id'])) {

    header("Location: Lv1-Vuln.php");
    exit;
    
} 

?>

<!DOCTYPE html>

<html>

    <head>

        <link rel="stylesheet" href=Style.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="images/logo.png" alt="navbarlogo" class="logo">

    <a href ="index.php" class="button">Home</a>

</nav>

<body>
    

    <section class="content">
        <h1 class="title">Level 2: XSS </h1>

        <p>XSS attacks gained the number seven spot on the OWASP top 10 in 2017.<br> This level tests your ability to take advantage of a XXS redirection attack.<p>

<div class="commentbox">
    <h2>How great is XSS</h2>
    <form>
        <textarea id="txt" placeholder="Add comment"></textarea> <! -- Defining comment box and button -- >
        <div class="btn2">
            <input type="button" id="buttn" value="Comment">
        </div>
    </form>
</div>

<div class="heading"> 
    <h2>Comments:</h2>
</div>  


<div class="commentoutputbox" id="output"> 
    <p>I prefer CSRF/XSRF<br><br>XSS is a great attack vector<br><br>&lt;script&gt;&lt;img title="&lt;/script&gt;&lt;img src onerror=alert("Close")&gt;"&gt;&lt;/script&gt;<br><br>&lt;script&gt;&lt;img title=“&lt;/script&gt;&lt;img src onerror=window.location.href="http://localhost/WaspWeb/Lv2-Mitigation.php"&gt;”&gt;&lt;/script&gt;</p>

    
<script> // JS gets user input and ammends input to comments box
    const txtbox = document.getElementById('txt');
    const button = document.getElementById('buttn');
    const output = document.getElementById('output');

    function getoutput(){

        output.innerHTML += txtbox.value + "<br><br>"; // add the userinput to the comment box 
        
        // output.innertext = txtbox.value; Prevents XSS by sanitizing all data as text and not executing and HTML or JS

    }

    button.addEventListener('click', getoutput);


</script>




<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>