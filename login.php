<?php
session_start();
$user = "dbw09";
$pass ="dbw2016";
$host="localhost";
$host="mmb.pcb.ub.es";
$dbname="DBW09";
$dbc = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass) /*db name*/

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
    if($query->fetchColumn() === md5($_POST['password'])
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
		<title>Login form Whatnext?</title>
	</head>
	<body> 
		<form method="post" name="login" action="login.php">
			Username: <input type="text" name="username"><br /><br />
			Password: <input type="password" name="password"><br /><br />
			<input type="submit" name="login" value="Log in">
		</form>
	</body>
</html>

