<?php
    $host="localhost";
    //$host="mmb.pcb.ub.es:13306";
    $user = "dbw09";
    $pass = "dbw2016";
    $dbname = "DBW09";
    $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $pass);
    

    date_default_timezone_set('Europe/Madrid');
    $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));//not sure what does, without it BAD GATEWAY error
    stream_context_set_default($opts);//set requests with previous line options by default
    
    set_time_limit(0);// removes max execution time

    $urleur= "http://ec.europa.eu/euraxess/rssFP.cfm?&idResearchField=12476878&idResPopulation=12477307";
    $streur=file_get_contents($urleur);
    $rsseur=simplexml_load_string($streur);
    foreach($rsseur->item as $itemeur) {
            $desca=explode("\n",$itemeur->description); 
            $n=count($desca);
            $pos_org=0;
            while ($pos_org < $n){
                if (preg_match("/Organisation/",$desca[$pos_org])){
                    break;                    
                }
                $pos_org++;
            }
            $institution=preg_replace("/.*Organisation:\s+/","",$desca[$pos_org]);
            while ($pos_org < $n){
                if (preg_match("/Application/",$desca[$pos_org])){
                    break;
                }
                $pos_org++;
            }
            $appdeadline=preg_replace("/.*Application.*:\s+/","",$desca[$pos_org]);
           // $stmt = $db->prepare("SELECT link FROM jobs WHERE link=:link");
            $stmt = $db->prepare("SELECT link FROM demo WHERE link=:link");
            $stmt->execute(array(':link'=>$itemeur->link));
            $affeccted_rows=$stmt->rowCount();
            if ($affeccted_rows == 0){
               //$stmteur = $db->prepare("INSERT INTO jobs(title,link,description,date) VALUES(:title,:link,:description,:date)");
               $stmteur = $db->prepare("INSERT INTO demo(title,link,description,location,date) VALUES(:title,:link,:description,:location,:date)");
            $stmteur->execute(array(':title' => $itemeur->title, ':link' => $itemeur->link,':description'=> $itemeur->description,':location'=>$institution, ':date'=> date("Y/m/d")));
            }
            else{
                continue;
            }
    }
    $urlsci="http://jobs.sciencecareers.org/jobsrss/?Discipline=1&countrycode=US";
    $rssci=simplexml_load_file($urlsci);
    foreach($rssci->channel->item as $itemsci){
            $desca=explode("\n",$itemsci->description);
            $titles=explode(":",$itemsci->title,2);
            $institution=$titles[0];
            $title=$titles[1];
            $location_pos=count($desca)-2;
            $location=$desca[$location_pos];
            $desc=implode("\n",array_slice($desca,0,$location_pos));
            if ($desc[count($desc)-1] != "."){
                $desc .= "...";
            }

            //$stmt = $db->prepare("SELECT link FROM jobs WHERE link=:link");
            $stmt = $db->prepare("SELECT link FROM demo WHERE link=:link");
            $stmt->execute(array(':link'=>$itemsci->link));
            $affeccted_rows=$stmt->rowCount();
            if ($affeccted_rows == 0){
               //$stmtsci = $db->prepare("INSERT INTO jobs(title,link,description,date) VALUES(:title,:link,:description,:date)");
               $stmtsci = $db->prepare("INSERT INTO demo(title,link,description,location,date) VALUES(:title,:link,:description,:location,:date)");
                $stmtsci->execute(array(':title' => $itemsci->title, ':link' => $itemsci->link,':description'=> $desc, ':location'=>$location,':date'=> date("Y/m/d")));
            }
            else{
                continue;
            }
    }
    
    /*
    $urlnat = "http://feeds.nature.com/naturejobs/rss/sciencejobs";
    $rssnat = simplexml_load_file($urlnat);

    foreach($rssnat->channel->item as $itemnat) {
        
            $stmt = $db->prepare("SELECT link FROM jobs WHERE link=:link");
            $stmt->execute(array(':link'=>$itemnat->link));
            $affeccted_rows=$stmt->rowCount();
            if ($affected_rows == 0){
                $stmtnat = $db->prepare("INSERT INTO proves(title,link,description,date) VALUES(:title,:link,:description,:date)");
                $stmtnat->execute(array(':title' => $itemnat->title, ':link' => $itemnat->link,':description'=> $itemnat->description, ':date'=> date("Y/m/d")));
            }
            else {
                echo "<h1>This record from nature already present in the db</h1>";
            }            
    }
    */
    $db=null; //Close the connection to the database
?>