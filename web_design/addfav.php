<?php 
require_once 'dbconfig.php';

foreach ($_POST['links'] as $link){
    try {  
        $stmtcheck = $dbc->prepare("SELECT offer_link FROM user_favourites WHERE offer_link=:link and username=:username");
        $stmtcheck->execute(array(':link'=>$link,':username'=>$_SESSION['username']));
        $affeccted_rows=$stmtcheck->rowCount();
        if ($affeccted_rows == 0){
            $stmt = $dbc->prepare("INSERT INTO user_favourites(username,offer_link) VALUES(:username, :link)");
            $stmt->bindparam("username",$_SESSION['username']);      
            $stmt->bindparam("link",$link);
            $stmt->execute();
        }
        }
        catch(PDOException $e)
        {
               echo $e->getMessage();
        } 
 }
$user->redirect('home.php');    
?>