<?php
require_once 'dbconfig.php';
include('header.php');
$error = $_GET['error'];
$linkprev = $_GET['link'];
echo '
	<div id="page">
	<br><br>
	<p>'.$error.'</p>
	<br>
	<a href='.$linkprev.'>Return to form</a> 
	</div>
	';

?>

<?php include('footer.php');?>
