<?php
    set_time_limit(0);// removes max execution time
    $DB_user = "dbw09";
    $pass = "dbw2016";
    $host="localhost";
   // $host="mmb.pcb.ub.es:13306";
    $dbname="DBW09";
    $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $DB_user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

    try {
        $stmt = $db->prepare('SELECT title, link FROM demo WHERE stage = :stage');
        $stag = "PHD";
        $stmt->bindParam(':stage', $stag);
        $a = $stmt->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
        exit;
    }
  $results = $stmt->fetchAll();
    foreach ($results as $item){
        if (preg_match("/eurax/",$item['link'])){
            $stmt = $db->prepare("UPDATE demo SET stage=:stage WHERE link=:link");
            $stmt->execute(array(':stage'=>"PHD",':link'=>$item['link']));
        }
        else {
            $title_check=strtolower($item['title']);
            $pattern="/post-?doc/";
            if (preg_match($pattern,$title_check)){
                $stage='postdoc';
            }
            else if (preg_match("/phd/",$title_check) or preg_match("/studen/",$title_check)){
                $stage='PHD';
            }
            else {
                $stage='other';
            }
            $stmt = $db->prepare("UPDATE demo SET stage=:stage WHERE link=:link");
            $stmt->execute(array(':stage'=>$stage,':link'=>$item['link']));
        }
    }
?>    