<?php
require_once 'dbconfig.php';

if($user->is_loggedin()!="")
{
    $user->redirect('home.php');
}
if (isset($_REQUEST['joined'])){
    header('Location: home.php');
}
if(isset($_POST['register']))
{
   $first_name = trim($_POST['first_name']);
   $surname = trim($_POST['surname']);
   $username = trim($_POST['username']);
   $email = trim($_POST['email']);
   $password = trim($_POST['password']); 
   $confirmpass=trim($_POST['conf_password']);
   if($username=="") {
      $error = "provide username !"; 
   }
   else if($email=="") {
      $error = "provide email !"; 
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = 'Please enter a valid email address !';
   }
   else if($password=="") {
      $error = "provide password !";

   }
   else if(strlen($password) < 8){
      $error = "Password must be at least 8 characters"; 
   }
    else if ($password !== $confirmpass){
        $error="Password and confirmed password do not match ";
    }
   else
   {
      try
      {
         $stmt = $dbc->prepare("SELECT username,email FROM users WHERE username=:username OR email=:email");
         $stmt->execute(array(':username'=>$username, ':email'=>$email));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);
    
         if($row['username']==$username) {
            $error = "Username already taken !";
         }
         else if($row['email']==$email) {
            $error = "A user with this email address has already been registered !";
         }
         else
         {
            if($user->register($first_name,$surname,$username,$email,$password)) 
            {
                $user->redirect('register.php?joined');
            }
         }
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  }
  if(isset($error)){
      echo "There has been an error";
      echo "<br>"
      echo $error;
      exit;
  }
}

?>

<html>
	<head>
		<title>Registration form Whatnext Bio?</title>
	</head>
	<body> 
		<h1>Registration</h1>
		<form method="post" name="register" action="register.php">
			<label>Name:</label> <input type="text" name="first_name"><br /><br />
			<label>Surname: </label><input type="text" name="surname"><br /><br />
			<label>email: </label><input type="text" name="email"><br /><br />
			<label>Username: </label><input type="text" name="username"><br /><br />
			<label>Password(>7 characters):</label><input type="password" name="password"><br /><br />
			<label>Confirm Password: </label><input type="password" name="conf_password"><br /><br />
			<input type="submit" name="register" value="Register">
		</form>
	</body>
</html>