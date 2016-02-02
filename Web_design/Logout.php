<?php
if (isset($_POST['logout'])){
	session_start();
	session_destroy();
	
	header('location:'); /*add name .php of file after ":"*/
};
?>
