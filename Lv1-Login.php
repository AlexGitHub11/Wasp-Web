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
                <p class="bodytext">Injection attacks gained the top spot on the OWASP top 10 in 2017.<br> 
                This level tests your ability to take advantage of SQL querys in order to 
                bypass the login auhtentication<p>
                <!-- If only Authentication bypass was as simple as 1 = 1 -->
        
                <div class="login"> <! -- Login form -- >
                    <form method="POST" action="lv1-Vuln" >
                        <table>
                            <tr class="form-control">
                                <td>Username: </td>
                                <td>
                                    <input type="text" name="username">
                                </td>
                            </tr>
                            <tr class="form-control">
                                <td>Password: </td>
                                <td>
                                    <input type="password" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td class="btn btn-secondary mb-4">
                                    <input type="submit" name="submit"
                                    value="Login">
                                </td>
                                <td>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            </section>  

    </body>

    <?php include "includes/footer.php"; ?>
    


</html>