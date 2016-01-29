<?php
require_once 'dbconfig.php';

if($user->is_loggedin()!="")
{
    $user->redirect('home.php');
}

if(isset($_POST['Register']))
{
   $first_name = trim($_POST['first_name']);
   $surname = trim($_POST['surname']);
   $username = trim($_POST['username']);
   $email = trim($_POST['email']);
   $password = trim($_POST['password']); 
 
   if($username=="") {
      $error[] = "provide username !"; 
   }
   else if($email=="") {
      $error[] = "provide email !"; 
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
   }
   else if($password=="") {
      $error[] = "provide password !";
   }
   else if(strlen($password) < 8){
      $error[] = "Password must be at least 8 characters"; 
   }
   else
   {
      try
      {
         $stmt = $dbc->prepare("SELECT username,email FROM users WHERE username=:username OR email=:email");
         $stmt->execute(array(':username'=>$username, ':email'=>$email));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);
    
         if($row['username']==$username) {
            $error[] = "Username already taken !";
         }
         else if($row['email']==$umail) {
            $error[] = "A user with this email addres has already been registered !";
         }
         else
         {
            if($user->register($fname,$lname,$uname,$umail,$upass)) 
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
}

?>

<html>
	<head>
		<title>Registration form Whatnext Bio?</title>
	</head>
	<body> 
		<h1>Registration</h1>
		<form method="post" name="register" action="register.php">
			Name: <input type="text" name="first_name"><br /><br />
			Surname: <input type="text" name="surname"><br /><br />
			email: <input type="text" name="email"><br /><br />
			Username: <input type="text" name="username"><br /><br />
			Password: <input type="password" name="password"><br /><br />
			Confirm Password: <input type="password" name="password"><br /><br />
			<input type="submit" name="register" value="Register">
		</form>
	</body>
</html> <!--table needs to be called users-->
