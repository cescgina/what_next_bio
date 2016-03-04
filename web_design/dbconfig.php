<?php

	session_start();
	/*Admin data*/

	$DB_user = "dbw09";
    $pass ="dbw2016";
    //$host="localhost";
    $host="mmb.pcb.ub.es:13306";
    $dbname="DBW09";

    try {
		$dbc = new PDO('mysql:host='.$host.';dbname='.$dbname,$DB_user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); /*db name*/
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
        exit;
	}

	include_once 'Class.user.php';
	$user = new USER($dbc);
?>
