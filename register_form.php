<?php
// Author: Akram D

// Enhanced Registration Script with Security and User Experience Improvements

// CSRF Protection
session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enhanced Registration</title>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles.css">
    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <h3>Enhanced PHP - PDO Registration</h3>
    <hr/>

    <form id="registrationForm" action="" method="POST">    
        <h4>Join our community...</h4>
        <hr>
        
        <!-- CSRF Token -->
        <input type="hidden" name="token" value="<?php echo $token; ?>">

        <label>Name</label>
        <input type="text" name="name" required />
        <br>
        <label>Email</label>
        <input type="email" name="email" required />
        <br>
        <label>Username</label>
        <input type="text" name="username" required />
        <br>
        <label>Password</label>
        <input type="password" name="password" required />
        <br>
        <!-- reCAPTCHA Widget -->
        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
        <br>
        <button type="submit" name="register-btn">Sign Up</button>
        <br>
        <a href="login_form.php">Already a member? Log in</a>
    </form>

    <!-- AJAX Script for form submission and validation -->
    <script src="script.js"></script>
        
</body>
</html>

<?php

if(isset($_POST['register-btn'])){
    require_once('user.php');
    $user = new User();

    // CSRF Token Validation
    if (!isset($_POST['token']) || ($_POST['token'] !== $_SESSION['token'])) {
        echo "<script>alert('CSRF token mismatch');</script>";
        exit;
    }

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Additional validations and enhancements...
}

?>
