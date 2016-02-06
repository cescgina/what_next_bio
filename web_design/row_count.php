<?php
		$sql = "SELECT count(*) FROM demo"; 
		$result = $dbc->prepare($sql); 
		$result->execute(); 
		$number_of_rows = $result->fetchColumn(); 
		$x = 20;
		$n = isset($_GET['page']) ? (int)$_GET['page'] : 0;
?>
