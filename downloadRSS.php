<?php 
    date_default_timezone_set('Europe/Madrid');
    $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));//not sure what does, without it BAD GATEWAY error
    stream_context_set_default($opts);//set requests with previous line options by default
    
    set_time_limit(0);// not sure
    $urls = Array("http://feeds.nature.com/naturejobs/rss/sciencejobs","http://ec.europa.eu/euraxess/rssFP.cfm?&idResearchField=12476878&idResPopulation=12477307");//urls array
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
        */
        //Use file_get_contents
        $contents=file_get_contents($url);
        if (! file_exists($path)){
             file_put_contents($path,$contents);

        }
    }

?>
