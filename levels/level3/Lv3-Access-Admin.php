
<?php 
session_start();

/* Prevents authentication unless logged in as admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] !== 1 ) {   // Validate user as admin to mitigate BAC.
    header('Location: lv3-Access_Guest.php');
    exit;
}
*/

$user = $_SESSION['user_id'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Level 3</title> 
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
            <h1 class="title">Welcome user <?php echo htmlspecialchars($user); ?></h1>
            <hr style="border-top: 2px solid rgb(68, 72, 77);">
            <br>
            <p class="bodytext"><b>Administrator View</b>
            <p>

            <!-- Display error message if login fails -->
            <?php if (isset($_SESSION['message'])): ?>
                        <div class="alert alert-info">
                            <?php 
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            ?>
                        </div>
            <?php endif; ?>

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
            <a href="Lv3-Mitigation.php"><button class="btn btn-secondary mb-4" style="width: 300px;">Continue</button></a>
        <div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>
