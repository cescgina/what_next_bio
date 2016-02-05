<?php

$page = 1;
if(!empty($_GET['page'])) {
    $page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
    if(false === $page) {
        $page = 1;
    }
}

$items_per_page = 10;

$stmt = $dbc->prepare("SELECT title FROM demo");
$stmt->execute();
$result = $stmt->fetchAll();
if(false === $result) {
   throw new Exception('Query failed');
} else {
   $row_count = mysql_num_rows($result);
   mysql_free_result($result);
}

$page_count = 0;
if (0 === $row_count) {  
    throw new Exception('No results');
} else {
   $page_count = (int)ceil($row_count / $items_per_page);
   if($page > $page_count) {
        $page = 1;
   }
}

$offset = ($page - 1) * $items_per_page;

$stmt = $dbc->prepare("SELECT title, location, link FROM demo LIMIT " . $offset . "," . $items_per_page);
$stmt->execute();
$result = $stmt->fetchAll();
foreach ($result as $row){
	echo "<tr><td>" . $row['title'] . "</td><td>" . $row['location'] . "</td><td>" . $row['link'] . "</td></tr>";
}


for ($i = 1; $i <= $page_count; $i++) {
   if ($i === $page) {
       echo 'Page ' . $i . '<br>';
   } else {
       echo '<a href="/home.php?page=' . $i . '">Page ' . $i . '</a><br>';
   }
}
?>
