<?php
session_start(); $username = $password = $userError = $passError = '';
if(isset($_POST['sub'])){
    $username = $_POST['username']; $password = $_POST['password'];
    if($username === 'kylewilson' && $password === 'kw121889'){
        $_SESSION['login'] = true; header('LOCATION:home.php'); die();
    }
    if($username !== 'admin')$userError = 'Invalid Username';
    if($password !== 'password')$passError = 'Invalid Password';
}





echo "<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <link rel=\"stylesheet\" href=\"assets/bootstrap/css/bootstrap.min.css\" />
     <link rel='stylesheet' href='assets/style.css'>
   </head>
<body>


    

    <div class='banner'>

        <!-- image must be 1900 by 900 px -->
        <img src='images/header.jpg' alt='banner' class='img-responsive'>
        <div class='caption'>
            <div class='caption-wrapper'>
                <div class='caption-info'>

                    <img style=\"width: 20%;\" src='images/logo.jpg'>

                </div>
            </div>
        </div>
    </div>


    <div id='login'>
    
    <h1 style='text-align: center; margin-bottom: 30px;'>Welcome!</h1>
  <form name='input' action='{$_SERVER['PHP_SELF']}' method='post'>
    <label for='username'></label><input type='text' value='$username' placeholder='Username' id='username' name='username' />
    <div class='error'>$userError</div><br><br>
    <label for='password'></label><input type='password' value='$password' placeholder='Password' id='password' name='password' />
    <div class='error'>$passError</div><br><br>
    <input class='btn-default btn-lg' type='submit' value='Login' name='sub' />
  </form>
  </div>
</body>
</html>";
?>