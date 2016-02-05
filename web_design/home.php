<?php
require_once 'dbconfig.php';
include('header.php');
?>

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
						<div class="dropdown">
							<button class="dropbtn">My tags</button>
							<div class="dropdown-content">
								<form name="tags">
									<input type="checkbox" name="option1" value="Tag1" checked>Bioinformatics<br>
									<input type="checkbox" name="option2" value="Tag2" checked>Tag2<br>
									<input type="checkbox" name="option3" value="Tag3" checked>Tag3<br>
								</form>
  							</div>
						</div>
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
		</div>
		<p id="Start"></p>
		<div id ="page">
			<section>
				<?php include('row_count.php'); ?>
				<div id="page-wrap">
					<?php include('prev_next.php'); ?>
					<table>
					<?php
						$sql = "SELECT id, title, location, date, link
							 FROM demo ORDER BY date DESC LIMIT ".($x * $n).", $x";
						$stmt = $dbc->prepare($sql);
						$stmt->execute();
						$result = $stmt->fetchAll();
       		         			foreach ($result as $row){
       		         			    echo "<tr><td><a href=" . $row['link']. ">".$row['title'] . "</a></td><td>" . $row['location'] . "</td></tr>";
						}
						$dbc=null;
					?>
					</table>
					<?php include('prev_next.php'); ?>
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
<?php include('footer.php');?>
