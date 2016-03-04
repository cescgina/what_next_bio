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
    $checkid=0;
   foreach ($result as $row){
        echo "<tr><td>";
        echo "<input type='checkbox' class='checks' name='links[]' value='" . $row['link'] . "' id='check".$checkid."' style='display: none;'>";
        echo "<label class='favbutton' style=' width:25px; height:25px;' for='check".$checkid."'>";
        echo "<img style=' width:25px; height:25px;' src='style/star.png'></label>";
        echo "</td><td><a href=" . $row['link']. "><b>".$row['title'] . "</b></a></td><td>" . $row['location'] . "</td></tr>";
        if (!preg_match('/eurax/', $row['link'] ) ){
            echo "<tr><td></td> <td colspan=2>" . $row['description'] . "</td></tr>";
        } else{
            echo "<tr><td></td> <td colspan=2> <i>Description is not large enough. Please go to the original website :^) </i></td>   </tr>";
        }
       $checkid++;
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
