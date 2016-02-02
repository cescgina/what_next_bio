<?php
require_once 'dbconfig.php';

if($user->is_loggedin()!="")
{
 $user->redirect('home.php');
}

if(isset($_POST['login']))
{
 $name_email = $_POST['name_email'];
 $password = $_POST['password'];
  
 if($user->login($name_email,$password))
 {
  $user->redirect('home.php');
 }
 else
 {
  $error = "Wrong Details !";
 } 
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="styles_register.css" type="text/css"  />
	<title>Login form Whatnext Bio?</title>
</head>
	<body> 
		<h2>Sign in</h2><br />
		<div class="container">
			<div class="form-container">
			<form method="post" name="login" action="login.php">
				<label>Username/email: </label><input type="text" name="name_email"required><br /><br />
				<label>Password:</label> <input type="password" name="password" required><br /><br />
				<input type="submit" name="login" value="Sign in">
				<br /><br />
				<label>I don't have account yet ! <a href="register.php">Register</a></label>
			</form>
			</div>
		</div>
	</body>
</html>
