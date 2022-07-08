<?php 

require 'blogconnect.php';

$err = " ";

if (isset($_POST['signup-btn'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailcheck = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $emailcheck);

    if (mysqli_num_rows($result) > 0) {
        $err = "This email has already been registered";
    }
    else {
        $sql = "INSERT INTO users(fullname,email,pwd) VALUES('$fullname', '$email', '$password')";
    $result = mysqli_query($conn, $sql);



        if ($result == true) {
            echo "<div class='popup' id='popup-1'>
            <div class='content'>
                <span class='close-btn'>&times;</span>
                <p>Your registration was successful please go ahead and sign in to open your dashboard. <a href='signin.php'>Sign in</a></p>
            </div>
        </div>";
        }
        else {
            echo "Error! Please try again";
        }
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
    <title>Sign Up</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h2>Join The Review.</h2>
            <div class="h4">
                <h4>Enter an email you would like to be associated to your account to sign up.</h4>
            </div>
            
            <div class="form-container">
                <form action=" " method="post">
                    <div class="input-box">
                        <label for="fullname">Your name</label>
                        <input type="text" name="fullname" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="email">Your email</label>
                        <input type="email" name="email" required>
                        <span style="color:red; text-align:center;" ><?php echo $err; ?></span>
                    </div>

                    <div class="input-box">
                        <label for="password">Your password</label>
                        <input type="password" name="password" required>
                    </div>
                    
                    <div class="signup-btn">
                        <button type="submit" name="signup-btn" id="mybtn">Sign Up</button>
                    </div>
                    
                </form>
            </div>
            
            <div class="log">
                <p>Already have an account? <a href="signin.php">Sign in</a></p>
            </div>
            
        </div>
    </div>
    


<script>

var popup = document.getElementById("popup-1");

var span = document.getElementsByClassName("close-btn")[0];

span.onclick = function(){
    popup.style.display = "none";
}

</script>
     
</body>
</html>

