
<!DOCTYPE html>

<html>

    <head>

        <link rel="stylesheet" href=style.css> 
    </head>

    <body text="white">

    <nav class="navigation-bar">

    <img src="images/logo.png" alt="navbarlogo" class="logo">

    <a href ="index.php" class="button">Home</a>

</nav>

<section class="content">
    <h1 class="title">XSS Injection Mitigation</h1>

<p>Seen below on the left is a image of the code you have just exploited to inflict a XXS attack on the webpage.<br> On the right is the secure version of this code to prevent XSS attacks. As can be seen, innertext has been implimented <br> within the JS to prevent input execution of tags such as &lt;script&gt; and sanitise everything as plain text. <p>


<div class="container">
    <a href="Lv3-Login.php"><button class="btn">Continue to Level 3</button></a>
</div>



<img src="images/xss-vuln-img.png" alt="vuln" class="xssvuln">

<img src="images/xss-secure-img.png" alt="secure" class="xsssecure">


<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>