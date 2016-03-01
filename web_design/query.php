<?php
include_once('dbconfig.php');

$tags = 0;
if (isset($_POST["tag"])){
  $tags = $_POST["tag"];
}

$location = $_POST["location"];
$stage = $_POST["position"];
$location_user = $_POST['country'];

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
var_dump($result);
$_SESSION['listoffers']=$result;
?>
