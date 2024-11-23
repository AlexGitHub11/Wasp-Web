# WASP Web 
![Project Banner](images/banner.png)
__A Software Security Game__

### Overview
WASP Web is a deliberately vulnerable web application intended to test user's software security skills. User's can complete all 10 levels by exploiting a different OWASP Top 10 
vulnerability at each level. Complete all 10 levels to get the WASP Web certificate.

This project is inspired by the [OWASP Top 10](https://owasp.org/www-project-top-ten/) and aims to provide practical examples of common web security vulnerabilities and how to exploit them for educational purposes only. This project is not officially affiliated with OWASP.

__UNDER DEVELOPMENT__

Demo video (Version 2.1): [Watch here](https://youtu.be/KhGYv_ks8UI)

## Setup Instructions

#### 1. Extract the Project:

    Extract the project files into the www directory of your web server (e.g., WAMP, XAMPP).

#### 2. Configure Database Connection:

    Open the conn.php file located in the project directory.

    Update the port number to match the port your SQL server is using.

        $servername = "localhost"; // Change name if using Virtual host
        $username = "your_username";
        $password = "your_password";
        $dbname = "waspwebdb";
        $port = "3306"; // Add your SQL server port here

#### 3. Import Database:
    

    Create a new database named waspwebdb in your SQL server.

    Import the waspwebdb.sql file into the newly created database.

#### 4. Access Web Application:

    Open your web browser and navigate to http://localhost/waspweb

     - If using a virtualhost navigate to replace 'localhost' with name.

    Follow the instructions on each page. If you find yourself stuck on a level, please refer to the demo video for a walkthrough. I created this web application as a learning tool to deepen my understanding of software security. Consequently, the levels are designed to be approachable and do not require an advanced understanding of web app exploitation and security. 

