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
        <h1 class="title">Register here </h1> <! -- Registration form -- >


        <div class="login">

            
        <form method ="POST" action="Lv3-RegConn.php" >

                <table>
                    <tr>
                        <td>Username: </td>
                        <td>
                            <input type="text" name="username">
                        </td>
                    </tr>

                    <tr>
                        <td>Password: </td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit"
                            value="Register">
                        </td>
                        <td>
                            Already a user: <a href="Lv3-Login.php">log in here!</a>

                        </td>

                    </tr>
                    
                </table>


                
            </form>

        </div>




<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>