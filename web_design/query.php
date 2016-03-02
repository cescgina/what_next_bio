<?php
include_once('dbconfig.php');

$tags = 0;
if (isset($_POST["tag"])){
  $tags = $_POST["tag"];
}

$location = $_POST["location"];
$stage = $_POST["position"];
$location_user = $_POST['country'];

$scheck=$dbc->prepare("SELECT position FROM users WHERE username=:user");
$scheck->execute(array("user"=>$_SESSION['username']));
$posuser=$scheck->fetchAll();
if ($posuser[0]['position'] == NULL and $tags){
    //User is specifyng preferences for first time
    foreach($tags as $tagval){
            $stag=$dbc->prepare("INSERT INTO user_tag (username,tag) VALUES (:user,:tag)");
            $stag->execute(array("user"=>$_SESSION['username'],"tag"=>$tagval));
    }
}
else {
    //User has already specified preferences and is updating them
    $stag=$dbc->prepare("DELETE FROM user_tag WHERE username=:user");
    $stag->execute(array("user"=>$_SESSION['username']));
    if ($tags){
        foreach($tags as $tagval){
            $snewtag=$dbc->prepare("INSERT INTO user_tag (username,tag) VALUES (:user,:tag)");
            $snewtag->execute(array("user"=>$_SESSION['username'],"tag"=>$tagval));
        }
    }
}

$spos=$dbc->prepare("UPDATE users SET country = :locat, position = :pos, country_opt = :loc_user WHERE username=:user");
$spos->execute(array("locat"=>$location_user,"pos"=>$stage,"loc_user"=>$location,"user"=>$_SESSION['username']));

header('Location: tags_page.php');
?>
