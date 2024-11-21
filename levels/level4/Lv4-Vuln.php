<?php
session_start();

if (!isset($_SESSION['pg7_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: ../level3/Lv3-Mitigation");
    exit; 
} 
$_SESSION['pg8_complete'] = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 4</title> 
    <link rel="stylesheet" href=../../Style.css> 
</head>
<body text="white">
    <?php include "../../includes/nav.php"; ?>
    <div class="flex-container">
        <div class="sidebarcontainer">
            <?php include "../../includes/sidebar.php"; ?>
        </div>
        <div class="main-content">
            <section class="content">
            <h1 class="title">Level 4: Cryptographic Failure</h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext"><b>Administrator View</b>
            <p>
            <p class="bodytext">
            Cryptographic Failure gained the no.2 spot in the 2021 OWASP Top 10. This vulnerability can present itself <br> 
            in a range of ways, such as storing passwords in plaintext or weak, unsalted password hashes.<br> 
            </p>
            <br>
            <p class="alert alert-info">
            Exploit this vulnerability to fill in the blank: <b>http://waspweb/level4/Lv4-________.php</b>
            <p>
            <section class="content">

            <!-- Defining table and then showing db results of users table row by row -->
            <table class="table table-bordered table-striped table-hover"> 
            <thead class="thead-dark">  
                <tr>
                    <th><u>Id</u></th>
                    <th><u>Username</u></th>
                    <th><u>Password</u></th>
                    <th><u>Last login</u></th>
                    <th><u>Failed login</u></th>
                </tr>
            </thead>

                <?php
                include("../../includes/conn.php");

                if(mysqli_connect_errno()){
                    echo "Could not connect to databse!";
                    exit();
                }
                $_SESSION['message'] = "Connection successful";
                
                $sql = "SELECT * From users ";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result-> fetch_assoc()) {
                        echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["user"] . 
                        "</td><td>" . $row["password"] . "</td><td>" . $row["last_login"] . 
                        "</td><td>" . $row["failed_login"]; 
                    }   
                } 
                $conn -> close();
                ?>
            </table>
        <div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>