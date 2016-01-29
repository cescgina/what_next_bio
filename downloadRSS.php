<?php
    $host="localhost";
    $user = "dbw09";
    $pass = "dbw2016";
    $dbname = "DBW09";
    $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $pass);

    date_default_timezone_set('Europe/Madrid');
    $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));//not sure what does, without it BAD GATEWAY error
    stream_context_set_default($opts);//set requests with previous line options by default
    
    set_time_limit(0);// not sure

    $urlnat = "http://feeds.nature.com/naturejobs/rss/sciencejobs";
    $rssnat = simplexml_load_file($urlnat);

    foreach($rssnat->channel->item as $itemnat) {
            $stmtnat = $db->prepare("INSERT INTO jobs(title,link,description,date) VALUES(:title,:link,:description,:date)");
            $stmtnat->execute(array(':title' => $itemnat->title, ':link' => $itemnat->link,':description'=> $itemnat->description, ':date'=> date("Y/m/d")));
            //$affected_rows = $stmt->rowCount();
    }
    $urleur= "http://ec.europa.eu/euraxess/rssFP.cfm?&idResearchField=12476878&idResPopulation=12477307";
    $streur=file_get_contents($urleur);
    $rsseur=simplexml_load_string($streur);
    foreach($rsseur->item as $itemeur) {
            $stmteur = $db->prepare("INSERT INTO jobs(title,link,description,date) VALUES(:title,:link,:description,:date)");
            $stmteur->execute(array(':title' => $itemeur->title, ':link' => $itemeur->link,':description'=> $itemeur->description, ':date'=> date("Y/m/d")));
    }

    $db=null; //Close the connection to the database
/* 
PREPARED STATEMENTS
$stmt = $db->prepare("INSERT INTO table(field1,field2) VALUES(:field1,:field2)");
$stmt->execute(array(':field1' => $field1, ':field2' => $field2));
$affected_rows = $stmt->rowCount();

$stmt = $db->prepare("DELETE FROM table WHERE id=:id");
    $stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    $affected_rows = $stmt->rowCount();
    
$stmt = $db->prepare("UPDATE table SET name=? WHERE id=?");
    $stmt->execute(array($name, $id));
    $affected_rows = $stmt->rowCount();
*/
?>
