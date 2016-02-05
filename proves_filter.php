 <?php 
    $urlnat = "http://feeds.nature.com/naturejobs/rss/sciencejobs";
    $rssnat = simplexml_load_file($urlnat);

    foreach($rssnat->channel->item as $itemnat) {
        $pattern="/post-?doc/";
        if (!preg_match($pattern,strtolower($itemnat->title))){
            print $itemnat->title;
            print "<br>";
        }
    }
        
?>