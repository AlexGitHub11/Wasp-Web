<?php
session_start();

if (!isset($_SESSION['pg4_complete']) || !isset($_SESSION['user_id'])) {
    header("Location: Lv3-Login");
    exit; 
} 
$_SESSION['pg6_complete'] = true;

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
            <p class="bodytext"><b>Undergoing maintenance...</b>
            <!-- Dont forget to build admin page -->
            <p>
            <br>
        <div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>
