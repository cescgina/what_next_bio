<?php
require_once 'dbconfig.php';
if($user->is_loggedin()!="")
{
 $user->redirect('home.php');
}
if(isset($_POST['login']))
{
 $username = $_POST['name_email'];
 $email = $_POST['name_email'];
 $password = $_POST['password'];
  
 if($user->login($username,$email,$password))
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
	<link type="text/css" rel="stylesheet" href="style/style.php">
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
