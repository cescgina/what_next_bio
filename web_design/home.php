<?php
require_once 'dbconfig.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>WhatNextBio</title>
		<link type="text/css" rel="stylesheet" href="style/style.php">
	</head>
	
	<body>
		<div id="head">
				<header>
					<h1 id="title">WhatNextBio!</h1>
					<h2 id="subtitle">Your go-to resource for PhD and postgrad offers</h2>
				</header>
			<div id="nav">
			<?php
				if($user->is_loggedin()!="")
					{ 
					 echo '
						<form method="post" name="logout" action="logout.php">
  							<input type="submit" value="Log Out"/>
						</form>
						<br>
						<p>Username:</p><p>';?><?php echo $_SESSION['username'];?><?php echo '</p>
						<p>My tags:</p>
						<form name="tags">
							<ul>
								<input type="checkbox" name="option1" value="Tag1" checked>Tag1<br>
								<input type="checkbox" name="option2" value="Tag2" checked>Tag2<br>
								<input type="checkbox" name="option3" value="Tag3" checked>Tag3<br>
							</ul>
						</form>
						<br>
						<form method="post" name="change" action="logout.php">
  							<input type="submit" value="Change password"/>
						</form>
						<br>
					';
				} else {
					echo '
						<br>
						<form action="login.php">
  							<input type="submit" value="Log In"/></br>
						</form>
						<br>
						<form action="register.php">
  							<input type="submit" value="Register"/>
						</form>
						<br>
					';
				}
			?>
			</div>
		</div>
		<p id="Start"></p>
		<div id ="page">
			<section>
				<div id="page-wrap">
					<table>
					<?php
						$sql = "SELECT count(*) FROM demo"; 
						$result = $dbc->prepare($sql); 
						$result->execute(); 
						$number_of_rows = $result->fetchColumn(); 
						$x = 20;
						$n = isset($_GET['page']) ? (int)$_GET['page'] : 0;
						$sql = "SELECT id, title, location, date, link
							 FROM demo ORDER BY date DESC LIMIT ".($x * $n).", $x";
						$stmt = $dbc->prepare($sql);
						$stmt->execute();
						$result = $stmt->fetchAll();
       		         			foreach ($result as $row){
       		         			    echo "<tr><td><a href=" . $row['link']. ">".$row['title'] . "</a></td><td>" . $row['location'] . "</td></tr>";
						}
						$dbc=null;
						if($n != 0) {
							echo('<a href="?page='.($n-1).'">Previous |</a>');
						}
						if (($n+1) * $x < $number_of_rows) {
							echo('<a href="?page='.($n+1).'">Next</a>');
						}
					?>
					</table>
				</div>
			</section>
			<div id="go_to">
				<a href="#Start">
					<img src="style/uparrow.png" alt="Go_to_Top" style="width:30px;height:30px;">
				</a>
			</div>
			<aside>
				<a href="http://mmb.pcb.ub.es/formacio/~dbw00/">
					<img src="style/master_logo.jpg" alt="Home_img" style="width:425px;height:125px;">
				</a>
			</aside>
		</div>
	</body>
</html>
