<?php
require_once 'dbconfig.php';
include('header.php');
if(!isset($_GET)){
    echo '
        <div id="page">
            <div id="page-wrap">
            <br><br>
              <p><b>A new password has been sent to your email.</b></p>
	      <p><b>Please check the spam folder if you can\'t find it</b></p>";
              <br>
                <a href=login.php><b>Return to form</b></a> 
            </div>
        </div>
        '; 
}
else{
$error = $_GET['error'];
$linkprev = $_GET['link'];
echo '
	<div id="page">
		<div id="page-wrap">
		<br><br>
			<p><b>'.$error.'</b></p>
		<br>
			<a href='.$linkprev.'><b>Return to form</b></a> 
		</div>
	</div>
	';
}
?>

<?php include('footer.php');?>
