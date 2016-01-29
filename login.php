<?php
session_start();
$user = "";
$pass ="";
$dbc = new PDO('mysql:host=mmb.pcb.ub.es;dbname=',$user,$pass) /*db name*/

$sql = "SELECT * FROM users";
$query = $dbc->prepare($sql);
$query->execute();
if (isset($_POST['username']));
{
	/*get data from form*/
	$username = $_POST["username"];
	$password = $_POST["password"];
	/*compare with database*/
	$sql = "SELECT password FROM users WHERE username='$username'";
	$query = $dbc->prepare($sql);
    $query->execute(array($_POST['username']));
    if($query->fetchColumn() === $_POST['password'])
    {
        /* starts the session created if login info is correct*/
        session_start();
        $_SESSION['username'] = $_POST['username'];

        header("Location: members.php"); /*name of the logged in file*/
        exit;
    }else{
		echo "Incorrect username or password. Please try again."
	}
}
}
?>

<html>
	<head>
		<title>Login form WhatNext Bio?</title>
	</head>
	<body> 
		<form method="post" name="login" action="login.php">
			Username: <input type="text" name="username"><br /><br />
			Password: <input type="password" name="password"><br /><br />
			<input type="submit" name="login" value="Log in">
		</form>
	</body>
</html>
