<?php
require_once 'dbconfig.php';
include('header.php');
?>
<div id="nav">
<p>Username:</p><p><?php echo $_SESSION['username'];?>
<?php echo '</p>
    <form method="post" name="logout" action="logout.php">
        <input class="Button" type="submit" value="Log Out"/>
    </form>
    <br>
    <form method="post" name="change" action="logout.php">
        <input class="Button" type="submit" value="Change password"/>
    </form>';
?>
</div>
</div>
<p id="Start"></p>
		<div id ="page">
			<section>
			<div id="page-wrap">
					<table>
<?php
 //Fetch favourites
$stmt = $dbc->prepare("SELECT o.* FROM demo o INNER JOIN user_favourites u ON o.link=u.offer_link WHERE u.username=:user");
$stmt->execute(array(':user'=>$_SESSION['username']));
$result=$stmt->fetchAll();
$affeccted_rows=$stmt->rowCount();
if ($affeccted_rows == 0){
    echo '<h2>There is nothing here</h2>';
    echo '<a href="home.php">Go back</a>';
}
else {
    echo '<form name="rmfav" method="POST" action="rmfav.php">';
   foreach ($result as $row){
                echo "<tr><td><a href=''><img style=' with:25px; height:25px;' src='http://findicons.com/files/icons/767/wp_woothemes_ultimate/128/star.png'></a><input type='checkbox' name='links[]' value='" . $row['link'] . "'></td><td><a href=" . $row['link']. ">".$row['title'] . "</a></td><td>" . $row['location'] . "</td></tr>";
    }
    echo '<input class="Button" type="submit" value="Remove Favourites"/>';
    echo '</form>';
    echo '<form name="back" action="home.php">';
    echo '<input class="Button" type="submit" value="Back to main list">';
    echo '</form>';
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
<?php include('footer.php');?>
