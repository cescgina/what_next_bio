<?php
require_once 'dbconfig.php';
include('header.php');

$error = $_GET['error'];
$linkprev = $_GET['link'];
echo '
	<br><br>
	<p>'.$error.'</p>
	<br>
	<a href='.$linkprev.'>Return to form</a> 
	';

?>

<div id="nav">
<?php
	echo '
		<br>
		<form action="login.php">
			<input class="Button" type="submit" value="Log In"/></br>
		</form>
		<br>
		<form action="register.php">
			<input class="Button" type="submit" value="Register"/>
		</form>
		<br>
	';
?>
</div>
<?php include('footer.php');?>
