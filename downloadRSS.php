<?php
    $host = "mmb.pcb.ub.es:13306"; //get from hosting provider
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
        $rsseur = simplexml_load_file($urleur);
        foreach($rsseur->item as $itemeur) {
            $stmteur = $db->prepare("INSERT INTO jobs(title,link,description,date) VALUES(:title,:link,:description,:date)");
            $stmteur->execute(array(':title' => $itemeur->title, ':link' => $itemeur->link,':description'=> $itemeur->description, ':date'=> date("Y/m/d")));

    }
    $db=null; //Close the connection to the database
?>

<?php
    /*$urls = Array("http://feeds.nature.com/naturejobs/rss/sciencejobs","http://ec.europa.eu/euraxess/rssFP.cfm?&idResearchField=12476878&idResPopulation=12477307");//urls array
    $paths = Array ('./nature_feeds/rss_'.date("md").'.xml',"./euraxess_feeds/rss_".date("md").'.xml');//paths to store xmls
    for ($i=0;$i<count($urls);$i++){//iterate over all the urls
        $path=$paths[$i];
        $url=$urls[$i];
        /*
        //use curl
        $fp = fopen ($path, 'w');//open file to write
        $ch = curl_init($url);// or any url you can pass which gives you the xml file
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);//not sure what followlocation means
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        
        //Use file_get_contents
        $contents=file_get_contents($url);
        if (! file_exists($path)){
             file_put_contents($path,$contents);

        }
        }
        */
?>
