<?php
if($n != 0) {
	echo('<a id="prev_next" href="?page='.($n-1).'">Previous</a>');
}
if (($n+1) * $x < $number_of_rows) {
	echo('<a id="prev_next" href="?page='.($n+1).'">Next</a>');
}
?>
