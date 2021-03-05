<?php include "../db.php"; ?>
<?php include "../admin/functions.php"; ?>
<?php session_start(); ?>

<?php

    checkIfUserIsLoggedInAndRedirect("../admin");
    

	if(ifItIsMethod('post')){

		if(isset($_POST['username']) && isset($_POST['password'])){

			login_user($_POST['username'], $_POST['password']);

		}else {

			redirect("login.php");
		}

	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Log In</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="name" placeholder="Your Username"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                           
                        <div class="form-group">
                            <input type="submit" name="login" id="submit" class="form-submit" value="Log In"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Are you a new member ? <a href="register.php" class="loginhere-link">Register here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>