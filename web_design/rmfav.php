<?php 
require_once 'dbconfig.php';

foreach ($_POST['links'] as $link){
    try {
        $stmt = $dbc->prepare("DELETE FROM user_favourites WHERE offer_link = :link");
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