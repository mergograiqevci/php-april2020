<?php include "../db.php"; ?>
<?php include "../admin/functions.php"; ?>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);


    $error = [

        'username'=> '',
        'email'=>'',
        'password'=>''

    ];


    if(strlen($username) < 4){

        $error['username'] = 'Username needs to be longer';

    }

     if($username ==''){

        $error['username'] = 'Username cannot be empty';

    }


     if(username_exists($username)){

        $error['username'] = 'Username already exists, pick another another';

    }

    if($email ==''){

        $error['email'] = 'Email cannot be empty';

    }


     if(email_exists($email)){

        $error['email'] = 'Email already exists';

    }


    if($password == '') {

        $error['password'] = 'Password cannot be empty';

    }


    foreach ($error as $key => $value) {
        
        if(empty($value)){

            unset($error[$key]);

        }

    } 

    if(empty($error)){

        register_user($username, $email, $password);

        $data['message'] = $username;

        login_user($username, $password);

    }   

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="post" action="register.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="name" placeholder="Your Username" 
                            autocomplete="on" value="<?php echo isset($username) ? $username : '' ?>">

                            <p><?php echo isset($error['username']) ? $error['username'] : '' ?></p>
                        
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" 
                            autocomplete="on" value="<?php echo isset($email) ? $email : '' ?>">

                            <p><?php echo isset($error['email']) ? $error['email'] : '' ?></p>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>

                            <p><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
                            
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>   
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
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