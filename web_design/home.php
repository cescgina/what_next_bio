<?php
require_once 'dbconfig.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>WhatNextBio</title>
		<link rel="stylesheet" href="style/style.css">
	</head>
	
	<body>
		<div id="head">
				<header>
					<h1 id="title">WhatNextBio!</h1>
					<h2 id="subtitle">Your go-to resource for PhD and postgrad offers</h2>
				</header>
		</div>
		<div>
			<div id="nav">
			<?php
				if($user->is_loggedin()!="")
					{ 
					 echo '
						<form method="post" name="logout" action="logout.php">
  							<input type="submit" value="Log Out"/>
						</form>
						<br>
						<p>Username:';?><?php echo $username;?><?php echo '</p>
						<br>
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
		<div id ="page">
			<section>
				<div id="page-wrap">
					<table id="Start">
					<?php
						$stmt = $dbc->prepare("SELECT id,description, title, location, date, link FROM demo  ORDER BY id DESC LIMIT 20");
						$stmt->execute();
						$result = $stmt->fetchAll();
       		         			foreach ($result as $row){
       		         			    echo "<tr><td><a href=" . $row['link']. ">".$row['title'] . "</a></td><td>" . $row['location'] . "</td></tr>";
						}
						$dbc=null;//close MySQL connection
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
