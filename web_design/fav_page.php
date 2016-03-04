<?php
require_once 'dbconfig.php';
include('header.php');
?>
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
                echo "<tr><td><a href=''><img style=' with:25px; height:25px;' src='style/star.png'></a><input type='checkbox' name='links[]' value='" . $row['link'] . "'></td><td><a href=" . $row['link']. ">".$row['title'] . "</a></td><td>" . $row['location'] . "</td></tr>";
								if (!preg_match('/eurax/', $row['link']) ){
					             echo "<tr> <td colspan=3>" . $row['description'] . "</td>   </tr>";
					         } else{
					             echo "<tr> <td> <i>Description is not large enough. Please go to the original website :^) </i></td>   </tr>";
					         }
		}
    echo '<input class="Button" type="submit" value="Remove Favourites"/>';
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
