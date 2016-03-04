<?php
require_once 'dbconfig.php';
$tags=0;
//Recover information for the user
$scheck=$dbc->prepare("SELECT position,country,country_opt FROM users WHERE username=:user");
$scheck->execute(array("user"=>$_SESSION['username']));
$posuser=$scheck->fetchAll();
$location = $posuser[0]["country_opt"];
$stage = $posuser[0]["position"];
$location_user = $posuser[0]['country'];


$stags=$dbc->prepare("SELECT tag FROM user_tag WHERE username=:user");
$stags->execute(array("user"=>$_SESSION['username']));
if ($stags->rowCount()>0){
    $tags=array();
    $result=$stags->fetchAll();
    foreach($result as $tag){
        array_push($tags,$tag['tag']);
    }
}
//Query based on the user-specific information
$query = "SELECT DISTINCT (t1.link),t1.title, t1.description, t1.location FROM ( SELECT * from demo WHERE stage=:stage) as t1";
if ($tags){
    $query .= " join ( SELECT * FROM offer_tags WHERE tag=:tag0";
    for ($i=1;$i<count($tags);$i++){
        $query .= " OR tag=:tag" . "$i";
    }
    $query .= " ) as t2 on t1.link=t2.link";
}
if (isset($location) and $location != "both"){
    $query .= " join ( ";
    switch ($location) {
        case "inside":
            $query .= " SELECT link FROM demo WHERE location=:locin";
            break;
        case "outside":
            $query .= " SELECT link FROM demo WHERE location!=:locin";
            break;
    }
    $query .= " ) as t3 on t1.link=t3.link";
}
$stmt = $dbc->prepare($query);
$stmt->bindParam("stage",$stage);
if ($tags){
    for ($i=0;$i<count($tags);$i++){
        $stmt->bindParam("tag"."$i",$tags[$i]);
    }
}
if (isset($location) and $location != "both"){
  $stmt->bindParam("locin",$location_user);
}
$stmt->execute();
$result = $stmt->fetchAll();

//result contains the list of offers that conform to the user specifications
include('header.php');
?>
<p id="Start"></p>
		<div id ="page">
			<section>
			<div id="page-wrap">
					<table>
<?php
$affeccted_rows=$stmt->rowCount();
if ($affeccted_rows == 0){
    echo '<h2>There is nothing here</h2>';
    echo '<a href="home.php">Go back</a>';
}
else {
    echo '<form name="add_fav" method="POST" action="addfav.php" enctype="">';
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
    echo '<input class="Button" type="submit" value="Add Favourites"/>';
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
