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
     $scheck=$dbc->prepare("SELECT position FROM users WHERE username=:user");
     $scheck->execute(array("user"=>$_SESSION['username']));
     $posuser=$scheck->fetchAll();
     if ($posuser[0]['position'] == NULL){
         $user->redirect('preferences_form.php');
     }
     else{
         $user->redirect('tags_page.php');
    }
 }
 else
 {
  header('Location: error_page.php?link=login.php&error=Incorrect username or password. Please try again.');
 } 
}
include('header.php');
?>
		</div>
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
<?php include('footer.php');?>
