<?php
	
	session_start();
	/*Admin data*/
	
	$DB_user = "dbw09";
    $pass ="dbw2016";
    $host="localhost";
    //$host="mmb.pcb.ub.es";
    $dbname="DBW09";
    
    try {
		$dbc = new PDO('mysql:host='.$host.';dbname='.$dbname.,$DB_user,$pass); /*db name*/
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
	
	include_once 'Class.user.php';
	$user = new USER($dbc);
?>
