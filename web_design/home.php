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
			<div id="nav">
<?php
if($user->is_loggedin()!="")
{ 
echo '
					<form method="post" name="logout" action="logout.php">
  					<input type="submit" value="Log Out"/>
					</form>
					<p>Username:';?><?php echo $username;?><?php echo '</p>
					<p>My tags:</p>
					<form name="tags">
						<ul><br>
								<li><input type="checkbox" name="option1" value="Tag1" checked>Tag1<br></li>
								<li><input type="checkbox" name="option2" value="Tag2" checked>Tag2<br></li>
								<li><input type="checkbox" name="option3" value="Tag3" checked>Tag3<br></li>
							<br>
						</ul>
					</form>
					<button type="submit">Change password</button>
';
} else {
echo '
				<form action="login.php">
  					<input type="submit" value="Log In"/>
				</form>
				<form action="register.php">
  					<input type="submit" value="Register"/>
				</form>
';
}
?>
			</div>
		</div>
		<div id ="page">
			<section>
				<p id="Start">News go here</p>
				<div id="page-wrap">
				<?php
					$query = "SELECT description, title, location, date, link FROM DEMO LIMIT 10";
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result)){   
						echo "<table<tr><td>" . $row['description'] . "</td><td>" . $row['university'] . "</td></tr>";
					}
					echo "</table>";
					mysql_close();
				?>

           <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
           <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
           <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
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
