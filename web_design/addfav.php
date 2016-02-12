<?php 
require_once 'dbconfig.php';

foreach ($_POST['links'] as $link){
    try {
        $stmt = $dbc->prepare("INSERT INTO user_favourites(username,offer_link) VALUES(:username, :link)");
        $stmt->bindparam("username",$_SESSION['username']);      
        $stmt->bindparam("link",$link);
        $stmt->execute();
        $user->redirect('home.php');    
    }
    catch(PDOException $e)
    {
           echo $e->getMessage();
    }   
}
?>