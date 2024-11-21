<?php
//ini_set('session.cookie_secure', 1); // Transmit cookies over HTTPS only 
//ini_set('session.cookie_httponly', 1); // Restrict access to cookies via JavaScript 
//ini_set('session.use_strict_mode', 1); // Use strict mode for cookie
session_start();

if (!isset($_SESSION['pg14_complete'])) {
    header("Location: Lv7-Vuln-Session");
    exit; 
} 

// Define a static session ID for fake admin session
$static_session_id = 'abcdefghijklmnopqrstuvwxyz';

// Check if the cookie is from admin session
if (session_id() === $static_session_id) {
    // Set session to admin
    $_SESSION['user_id'] = 'admin';
    $_SESSION['pg13_complete'] = true;
} else {
    // Nomrmal session
    if (!isset($_SESSION['user_id'])) {
        $_SESSION['user_id'] = 'user'; // Set default to stop confliction
        $_SESSION['pg13_complete'] = true;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Level 7</title>
    <link rel="stylesheet" href="../../Style.css">
</head>
<body text="white">
    <?php include "../../includes/nav.php"; ?>
    <div class="flex-container">
        <div class="sidebarcontainer">
            <?php include "../../includes/sidebar.php"; ?>
        </div>
        <div class="main-content">
            <section class="content">
                <h1 class="title">Employee Notification Portal</h1>
                <hr style="border-top: 2px solid rgb(68, 72, 77);">
                <br>

                <!-- Display content based on user_id -->
                <?php if ($_SESSION['user_id'] == 'user'): ?>
                    <p class="bodytext">Welcome, <b>User</b><br>
                    <br>
                    You have <b>7</b> Notifications.
                    <br>
                    <br>
                    <hr style="border-top: 2px solid rgb(68, 72, 77);">
                    </p>
                    <P class="bodytext">
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Service down from 3pm-6am
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Please read OWASP Top 10!! 
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Please download payslip doc!
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Change passwords this week
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Change passwords this week
                    <br>
                    <br>
                    From:&nbsp;<b> IT@OwaspWeb.org</b>&nbsp;&nbsp;Cookie: abcdefghijklmnopqrstuvwxyz
                    <br>
                    <br>
                    From:&nbsp;<b> IT@OwaspWeb.org</b>&nbsp;&nbsp;Dear all, Please disregard prior email
                    </p>
                    
                <?php elseif ($_SESSION['user_id'] == 'admin'): ?>
                    <p class="bodytext">Welcome, <b>Administrator</b><br>
                    <br>
                    You have <b>3</b> Notifications.
                    <br>
                    <br>
                    <hr style="border-top: 2px solid rgb(68, 72, 77);">
                    </p>
                    <P class="bodytext">
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Service down from 3pm-6am
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Please read OWASP Top 10!! 
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Please download payslip doc!
                    <br>
                    <br>
                    <a href="../level7/Lv7-Mitigation.php"><button class="btn btn-secondary mb-4" style="width: 300px; font-size: 1.2rem">Continue</button></a>
                    </p>

                <?php else: ?>
                    <p class="bodytext">Welcome, <b>User</b><br>
                    <br>
                    You have <b>7</b> Notifications.
                    <br>
                    <br>
                    <hr style="border-top: 2px solid rgb(68, 72, 77);">
                    </p>
                    <P class="bodytext">
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Service down from 3pm-6am
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Please read OWASP Top 10!! 
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Please download payslip doc!
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Change passwords this week
                    <br>
                    <br>
                    From:&nbsp;<b> IT@WaspWeb.org</b>&nbsp;&nbsp;Dear all, Change passwords this week
                    <br>
                    <br>
                    From:&nbsp;<b> IT@OwaspWeb.org</b>&nbsp;&nbsp;Cookie: abcdefghijklmnopqrstuvwxyz
                    <br>
                    <br>
                    From:&nbsp;<b> IT@OwaspWeb.org</b>&nbsp;&nbsp;Dear all, Please disregard prior email
                    </p>
                <?php endif; ?>
                
            </section>  
        </div>
    </div>
    <?php include "../../includes/footer.php"; ?>
</body>
</html>
