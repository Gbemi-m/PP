<?php 

require 'blogconnect.php';
session_start();

if (isset($_POST['signin-btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND pwd = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); 
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['pwd'] = $row['pwd'];

        header('location: profile.php');
    }
    else {
        echo" <div class='mod'>
                    <p>User not found! Register <a href='signup.php'>here</a> to become a member. </p>
                </div>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign In</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h2>Sign in with email</h2>
            <div class="h4">
                <h4>Welcome back. Enter the email and password associated to your account to sign in.</h4>
            </div>
            
            <div class="form-container">
                <form action="#" method="post">
                    
                    <div class="input-box">
                        <label for="email">Your email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Your password</label>
                        <input type="password" name="password"required>
                    </div>
                    
                    <div class="signin-btn">
                        <button type="submit" name="signin-btn" >Sign In</button>
                    </div>
                    
                </form>
            </div>
            
            <div class="log">
                <p>Don't have an account? <a href="signup.html">Sign up</a></p>
            </div>
            
        </div>
    </div>

   



     
</body>
</html>

