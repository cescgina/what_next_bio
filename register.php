<?php
	if (empty($_POST)){
?>

<html>
	<head>
		<title>Registration form Whatnext?</title>
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


<?php
} else {
	print_r( $_POST );
	/*Admin data*/
	$user = "dbw09";
    $pass ="dbw2016";
    $host="localhost";
    $host="mmb.pcb.ub.es";
    $dbname="DBW09";
    $dbc = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass) /*db name*/


	/*Data from form*/
	$first_name = $_POST["first_name"]
	$surname = $_POST["surname"]
	$email = $_POST["email"]
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	$confpassword = md5($_POST["confpassword"]);

	$sql = "INSERT INTO users ( username, password, first_name, surname, email ) VALUES ( :username, :password, :first_name, :surname, :email )";
	/*insert into table*/
	$query = $dbc->prepare($sql);
	$query->execute(array( ':username'=>$username, ':password'=>$password,
	':first_name'=>$first_name, ':surname'=>$surname, ':email'=>$email ) );
	$result = $query->execute( array( ':username'=>$username, ':password'=>$password, ':first_name'=>$first_name, ':surname'=>$surname, ':email'=>$email ) );
	if ( $result ){
	  echo "<p>You have succesfully registered!</p>";
	} else {
	  echo "<p>Sorry, there has been a problem inserting your details.</p>";
	}
}
?>

