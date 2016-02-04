<?php
require_once 'dbconfig.php';
session_start();
session_unset();
header("Location: home.php");
?>
