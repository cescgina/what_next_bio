<?php
require_once 'dbconfig.php';

$category_list=array("Microbiology","Biochemistry","Biomedicine","Biotechnology","Genetics","Environmental","Bioinformatics","Biophysics");
$categories=array();
foreach ($category_list as $cat){
    $temp_arr = explode(",",file_get_contents($cat."txt"));
    $categories[$cat] = $temp_arr;
}
try {
	$stmt=$dbc->prepare("SELECT link, title, description FROM demo");
    $stmt->execute();
}
catch(PDOException $e) {
    echo $e->getMessage();
}
$results = $stmt->fetchAll();
foreach ($categories as $key => $value){
    foreach ($results as $item){
        foreach($value as $word){
            $word = strtolower($word);
            
            if ( preg_match("/".$word."/",strtolower($item['title'])) or preg_match("/".$word."/",strtolower($item['description']))){
                try {
                   $stmin = $dbc->prepare("INSERT INTO offer_tags(link,tag) VALUES(:link,:tag)");
                    $stmin->bindParam(':link',$item['link']);
                    $stmin->bindParam(':tag',$key);
                    $stmin->execute(); 
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }
                break;
            }
        }
    }
}
?>