<?php
    $DB_user = "dbw09";
    $pass ="dbw2016";
    $host="localhost";
    //$host="mmb.pcb.ub.es:13306";
    $dbname="DBW09";

    try {
		$dbc = new PDO('mysql:host='.$host.';dbname='.$dbname,$DB_user,$pass); /*db name*/
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

$category_list=array("Microbiology","Biochemistry","Biomedicine","Biotechnology","Genetics","Environmental","Bioinformatics","Biophysics");
$categories=array();
foreach ($category_list as $cat){
    $temp_arr = explode(",",file_get_contents($cat.".txt"));
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