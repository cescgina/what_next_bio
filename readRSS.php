<?php
    // simplexml to parse xml file
    //$rss = simplexml_load_string($content);
    $pathnat = './nature_feeds/rss_'.date("md").'.xml';//paths to store xmls
        $rss = simplexml_load_file($pathnat);
        foreach($rss->channel->item as $item) {
            print '<a href="'.$item->link.'">'.$item->title.'</a><br />';
        }
    echo "<br>";
    $patheur= "./euraxess_feeds/rss_".date("dm").'.xml';
        $rss = simplexml_load_file($patheur);
        foreach($rss->item as $item) {
            print '<a href="'.$item->link.'">'.$item->title.'</a><br />';
        }
?>