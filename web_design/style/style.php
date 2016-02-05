<?php

header('content-type:text/css');

	//Positions:
$header_height = 160;
$border_height = 5;
$nav_width = 150;
$header_top = $header_height.'px';
$margin_border = $border_height.'px';
$header_top2 = ($header_height + ($border_height*2)).'px';
$nav_bar_width = $nav_width.'px';

	//Colors:
$background_color = '#DCDCDC';
$margin_color = '#282828';
$head_color = '#C2DF95';
$title_color = '#FFFFFF';
$subtitle_color = '#FFFFFF';
$nav_color = '#DFBE75';

	//Fonts:
$font = 'Tahoma, Geneva, sans-serif';
$font2 = 'Times New Roman, Georgia, Serif';

echo <<<CSS

html { 
	background-color: $background_color;
}

body {
	font-family: $font;
	position:absolute;
	top:0px;
	left:0px;
	right:0px;
	bottom:0px; 
}

#head {
	text-align:center;
	font-family:$font;
	font-weight: bold;
	position: fixed;
	width: 100%;
	height: $header_top;
	padding:0px;
	border-top: $margin_border solid $margin_color;
	border-bottom: $margin_border solid $margin_color;
	top:0px;
	left: 0px;
	right: 0px;
	z-index: 2;
	margin:0px solid;
	background-color: $head_color;
}

#title {
	font-family:$font;
	font-weight: bold;
	font-size: 300%;
	color: $title_color;
}

#subtitle {
	font-family:$font;
	font-size: 120%;
	color: $subtitle_color;
}

#nav {
	position: fixed;
	text-align:center;
	width:$nav_bar_width;
	top: $header_top2;
	height: 1000px;
	padding: 10px;
	left: 0px;
	bottom: 0px;
	background:$nav_color;
	border-right: $margin_border solid $margin_color;	
}

#page {
	width: 100%;
	height: 500px;
	position: absolute;
	z-index: 1;
}

#page-wrap { 
	width: 50%;
	margin: 50px auto;
	margin-left: 30%;
	margin-right: 30%;
	margin-top: 250px;
	float: right;
	float: left;
	padding: 20px;
	background: white;
	-moz-box-shadow: 0 0 20px black;
	-webkit-box-shadow: 0 0 20px black;
	box-shadow: 0 0 20px black; 
}

#form-container {
	text-align: center;
	font-family:$font;
	font-weight: bold;

}

#form-title {
	text-align: center;
	font-size: 220%;
}

label, input {
    display: inline-block;
}

label {
    width: 30%;
    text-align: right;
}

label + input {
    width: 30%;
    margin: 0 30% 0 4%;
}

section {
	float:center;
	padding:10px;
	text-align:center;
	font-family: $font2;
}

#go_to {
	position: fixed;
	bottom:0px;
	left:49%;
}

aside {
	width:15%;
	float:right;
	margin-right: 18%;
	padding:10px;
}

CSS;

?>
