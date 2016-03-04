<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
		<title>WhatNextBio</title>
		<link type="text/css" rel="stylesheet" href="style/style.php">
	</head>

	<body>
		<div id="head">
			<header>
				<a href="http://mmb.pcb.ub.es/formacio/~dbw09/project/web_design/home.php"><h1 id="title">WhatNextBio!</h1></a>
				<h2 id="subtitle">Your go-to resource for PhD and postgrad offers</h2>
			</header>
			<div id="nav">
			<?php
				if($user->is_loggedin()!="")
					{
					 echo '
						<p>Username:</p><p>';?><?php echo $_SESSION['username'];?><?php echo '</p>
						<br><br>
						<form method="post" name="logout" action="logout.php">
  							<input class="Button" id="nav_button" type="submit" value="Log Out"/>
						</form>
						<br>
						<form method="post" name="change" action="change_pass.php">
  							<input class="Button" id="nav_button" type="submit" value="Change password"/>
						</form>
						<br>
						<form method="post" name="my_prefs" action="preferences_form.php">
  							<input class="Button" id="nav_button" type="submit" value="Change Preferences"/>
						</form>
						<br>
						<form method="post" name="FAQ" action="tutorial.php">
  							<input class="Button" id="nav_button" type="submit" value="Web Tutorial"/>
						</form>
						<br>
					';
				} else {
					echo '
						<br>
						<form action="login.php">
  							<input class="Button" id="nav_button" type="submit" value="Log In"/></br>
						</form>
						<br>
						<form action="register.php">
  							<input class="Button" id="nav_button" type="submit" value="Register"/>
						</form>
						<br>
						<form method="post" name="FAQ" action="tutorial.php">
  							<input class="Button" id="nav_button" type="submit" value="Web Tutorial"/>
						</form>
						<br>
					';
				}
			?>
			</div>
			<?php
			if($user->is_loggedin()!="")
				{
					include('horizontal.php');
				}
			?>
		</div>
