<?php
require_once 'dbconfig.php';
if($user->is_loggedin()!="")
{
 $user->redirect('home.php');
}
if(isset($_POST['login']))
{
 if (preg_match("/@/",$_POST['name_email'])){
    $email = $_POST['name_email'];  
     $username='';
 }
else {
    $username = $_POST['name_email'];
    $email='';
}
 $password = $_POST['password'];
 if($user->login($username,$email,$password))
 {
    $user->redirect('home.php');
 }
 else
 {
  $error = "Wrong Details !";
     echo $error;
    exit;
 } 
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style/style.css" type="text/css"  />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login form Whatnext Bio?</title>
</head>
	<body>
		<div id="page-wrap">
			<div id="form-container">
				<p id="form-title">Sign in</p>
				<form method="post" name="login" action="login.php">
					<label>Username/email:</label> <input type="text" name="name_email"required><br /><br />
					<label>Password:</label> <input type="password" name="password" required><br /><br />
					<input type="submit" name="login" value="Submit">
					<br /><br />
					<p>I don't have an account yet !</p>
					<a href="register.php">Register</a>
				</form>
			</div>
		</div>
	</body>
</html>