<?php
require_once 'dbconfig.php';

if(isset($_POST['change_pwd']))
{
   $old = trim($_POST['old_password']);
   $password = trim($_POST['password']); 
   $confirmpass=trim($_POST['conf_password']);
   if ($password !== $confirmpass){
        header('Location: error_page.php?link=register.php&error=Password and confirmation password do not match!');
    }
   else if (strlen($password) < 8) {
	   header('Location: error_page.php?link=register.php&error=Password must be at least 8 characters!');
   }
   else
   {
      try
      {
         $stmt = $dbc->prepare("SELECT * FROM users WHERE username=:user");
         $stmt->execute(array("user"=>$_SESSION['username']));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);
         if(password_verify($old, $row['password'])) {
			$new_password = password_hash($password, PASSWORD_DEFAULT);
            $spass=$dbc->prepare("UPDATE users SET password = :pass WHERE username=:user");
			$spass->execute(array("pass"=>$new_password,"user"=>$_SESSION['username']));
			header('Location: error_page.php?link=home.php&error=Password changed succesfully!');
         }
         else
         {
			 header('Location: error_page.php?link=register.php&error=Current password not correct!');
         }
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  }
}
include('header.php');
?>
	<div id ="page">
	<section>
		<div id="page-wrap">
			<div id="form-container">
				<p id="form-title">Change password</p>
				<form method="post" name="change_pwd" action="change_pass.php">
					<label>Current password:</label> <input type="password" name="old_password" required><br /><br />
					<label>New password(>7 characters):</label><input type="password" name="password" required><br /><br />
					<label>Confirm new password: </label><input type="password" name="conf_password" required><br /><br />
					<input type="submit" name="change_pwd" value="Submit">
				</form>
			</div>
		</div>
	</section>
	</div>
	
<?php include('footer.php');?>
