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
$query = "SELECT t1.link,t1.title,t1.location FROM ( SELECT * from demo WHERE stage=:stage) as t1";
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
$affeccted_rows=$stmt->rowCount();
if ($affeccted_rows == 0){
    echo '<h2>There is nothing here</h2>';
    echo '<a href="home.php">Go back</a>';
}
else {
    echo '<form name="add_fav" method="POST" action="addfav.php" enctype="">';
   foreach ($result as $row){
                echo "<tr><td><a href=''><img style=' with:25px; height:25px;' src='http://findicons.com/files/icons/767/wp_woothemes_ultimate/128/star.png'></a><input type='checkbox' name='links[]' value='" . $row['link'] . "'></td><td><a href=" . $row['link']. ">".$row['title'] . "</a></td><td>" . $row['location'] . "</td></tr>";
    }
    echo '<input class="Button" type="submit" value="Add Favourites"/>';
    echo '</form>';
    echo '<form name="back" action="home.php">';
    echo '<input class="Button" type="submit" value="Show me everything!">';
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
