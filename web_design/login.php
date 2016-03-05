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
if(isset($_POST['pass_rem'])) {
 $email = $_POST['email'];
 
     try{
            require 'PHPMailerAutoload.php';
             $stmt = $dbc->prepare("SELECT email,username FROM users WHERE email=:email");
             $stmt->execute(array(':email'=>$email));
             $row=$stmt->fetch(PDO::FETCH_ASSOC);
             $userchange=$row['username'];
             if($row['email']==$email) {
                    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
                    $string = '';
                    for ($i = 0; $i < 8; $i++) {
                        $string .= $characters[rand(0, strlen($characters) - 1)];
                    }
                $new_password = password_hash($string, PASSWORD_DEFAULT);
                //mail

                $mail = new PHPMailer;

                //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                 $mail->SMTPAuth = true;   
                 $mail->SMTPDebug = 2;
                 // Enable SMTP authentication
               // $mail->Username = 'whatnextbio.dbw@gmail.com';                 // SMTP username
                //$mail->Password = 'whatnextbio.dbw';                           // SMTP password
                 $mail->Username = 'whatnextbio@gmail.com';
                 $mail->Password = 'Whatnextbio1';
                $mail->SMTPSecure = 'tls';
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;                                   // TCP port to connect to

                $mail->setFrom('whatnextbio.dbw@gmail.com', 'The WhatNextBio Team');
                $mail->addAddress($email, $userchange);     // Add a recipient
//                $mail->addReplyTo('info@example.com', 'Information');
//                $mail->addCC('cc@example.com');
//                $mail->addBCC('bcc@example.com');

//                $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//                $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'Password change';
        //        $mail->Body    = '<p>Dear '.$userchange.',</p><p>Your new password is '.$string . '</p><p>Thanks for using our web!<\p><p>The WhatNextBio Team</p>';
               $mail->Body = 'Dear '.$userchange.',\nYour new password is '.$string . '\n\nThanks for using our web!\nThe WhatNextBio Team';

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
                $spos=$dbc->prepare("UPDATE users SET password = :password WHERE email=:email");
                $spos->execute(array("password"=>$new_password,"email"=>$email));
                header("Location: home.php");
             } else {
            header('Location: error_page.php?link=login.php&error=No user with this email exists!');
        }
     }
     catch(PDOException $e) {
         		echo $e->getMessage();
     }
}
include('header.php');
?>
		</div>
		<div id="page">
			<div id="page-wrap">
				<div id="form-container">
					<p id="form-title">Sign in</p>
					<form method="post" name="login" action="login.php">
						<label>Username/email:</label> <input type="text" name="name_email"required><br /><br />
						<label>Password:</label> <input type="password" name="password" required><br /><br />
						<input type="submit" name="login" value="Submit">
					</form>
					<form method="post" name="pass_rem" action="login.php">
						<p>I don't remember my password...</p>
						<label>E-mail:</label> <input type="text" name="email" required><br /><br />
						<input type="submit" name="pass_rem" value="Send me a new one">
					</form>
					<p>I don't have an account yet!</p>
					<a href="register.php">Register</a>
				</div>
			</div>
		</div>
<?php include('footer.php');?>
