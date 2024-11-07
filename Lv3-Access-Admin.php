
<?php 
session_start();

/* Prevents authentication unless logged in as admin

if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] !== 1 ) {   // Validate user as admin to mitigate BAC.
    header('Location: lv3Database-Guest.php');
    exit;
}

*/

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

<section class="content">
    <h1 class="title">Admin priviledge</h1>


<p>Welcome Admin <p>

<body>


<section class="content">


    <table class="table1"> <! -- Defining table and then showing db results of users table row by row -- >
        <tr>
            <th><u>ID</u></th>
            <th><u>UserName</u></th>
            <th><u>Password</u></th>
            <th><u>Last-Login</u></th>
            <th><u>Failed-Login</u></th>
            
        </tr>

        <?php
      
        include("conn.php");

        
        if(mysqli_connect_errno()){
            echo "Could not connect to databse!";
            exit();
        }
        echo "Connection to database successful!<br><br>";
        

        
        $sql = "SELECT * From users ";
        $result = $conn->query($sql);

    
        
        if ($result->num_rows > 0) {
            while($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["user"] . "</td><td>" . $row["password"] . "</td><td>" . $row["last_login"] . "</td><td>" . $row["failed_login"] . "</td><td>";
                echo "<tr><td colspan=\"5\"><br><hr width=\"100%\"></td></tr>";
            }   
        } 
        else {
            echo "No Results found!";
        }
        
        $conn -> close();
        ?>

    </table>

    <div class="container">
        <a href="Lv3-Mitigation.php"><button class="btn">Continue</button></a>
    </div>

<footer class="footer">
    <br>Can you make it to level 5
</footer>


    </body>


</html>