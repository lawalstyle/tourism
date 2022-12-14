
<?php
ini_set("display errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LawalStyle</title>
  <link rel="stylesheet" href="./Loginstyle.css">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script 
     src="https://kit.fontawesome.com/64d58efce2.js"
     crossorigin="anonymous"></script>
     <title>Login</title>
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https:..cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<a href = "index.php"> LawalStyle</a> 
<div class="container">

        <div class="forms-container">
            <div class="signin-signup">
                <form action="login_user.php" method = "post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name ="passwords">
                    </div>
                    <input type="submit" value="Login" class="btn solid">

                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                <form action="add_user.php" method="post" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name = "username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name = "password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Name " name = "name">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name = "email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="date" placeholder="Date Of Birth" name = "dob">
                    </div>
                    <input type="submit" name="submut" value="Submit" class="btn solid">

                    <p class="social-text">Or Sign Up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here ?</h3>
                    <p>Click To Signup</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="doctorsvg1.svg" class="image"alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>Click to Sign In</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="doctorsvg2.svg" class="image"alt="">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
<!-- partial -->
  <script  src="./Loginscript.js"></script>
</html>
