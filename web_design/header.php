<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
						<p>Username:</p><p>';?><?php echo $_SESSION['username'];?><?php echo '</p>
						<form method="post" name="logout" action="logout.php">
  							<input class="Button" type="submit" value="Log Out"/>
						</form>
						<br>
						<form method="post" name="change" action="logout.php">
  							<input class="Button" type="submit" value="Change password"/>
						</form>
						<br>    
					';
				} else {
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
