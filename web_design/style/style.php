<?php

header('content-type:text/css');

	//Positions:
$header_height = 160;
$border_height = 5;
$nav_width = 150;
$header_top = $header_height.'px';
$margin_border = $border_height.'px';
$horizontal_margin = ($nav_width + $margin_border).'px';
$header_top2 = ($header_height + ($border_height*2)).'px';
$nav_bar_width = $nav_width.'px';

	//Colors:
$background_color = '#DCDCDC';
$margin_color = '#282828';
$head_color = '#C2DF95';
$title_color = '#FFFFFF';
$subtitle_color = '#FFFFFF';
$nav_color = '#DFBE75';
$link_color1 = '#DCDCDC';
$link_color2 = '#A0A0A0';

	//Fonts:
$font = 'Tahoma, Geneva, sans-serif';
$font2 = 'Times New Roman, Georgia, Serif';

	//Sizes:
$font_size_button = '10px';

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

#horizontal_bar {
	list-style-type: none;
	margin-left: $horizontal_margin;
	margin-top: 20px;
	padding-left: 25%;
	width: 100%;
	overflow: hidden;
	background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
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
	margin-top: 200px;
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

.Button {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
	background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family: $font;
	font-size: $font_size_button;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.Button:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
	background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
	background-color:#f6f6f6;
}
.Button:active {
	position:relative;
	top:1px;
}

.dropbtn {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
	background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
	background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#666666;
	font-family: $font;
	font-size: $font_size_button;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
	border: none;
	cursor: pointer;
}

.dropbtn:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
	background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
	background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
	background-color:#f6f6f6;
}

.dropdown {
	position: relative;
	display: inline-block;
}

.dropdown-content {
	-moz-box-shadow: 3px 4px 0px 0px #899599;
	-webkit-box-shadow: 3px 4px 0px 0px #899599;
	box-shadow: 3px 4px 0px 0px #899599;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #bab1ba));
	background:-moz-linear-gradient(top, #ededed 5%, #bab1ba 100%);
	background:-webkit-linear-gradient(top, #ededed 5%, #bab1ba 100%);
	background:-o-linear-gradient(top, #ededed 5%, #bab1ba 100%);
	background:-ms-linear-gradient(top, #ededed 5%, #bab1ba 100%);
	background:linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#bab1ba',GradientType=0);
	background-color:#ededed;
	-moz-border-radius:15px;
	-webkit-border-radius:15px;
	border-radius:15px;
	border:1px solid #d6bcd6;
	display: none;
	cursor:pointer;
	color:#3a8a9e;
	font-family: $font;
	font-size: $font_size_button;
	padding:7px 25px;
	text-align:left;
	text-decoration:none;
	text-shadow:0px 1px 0px #e1e2ed;
	position: absolute;
	min-width: 50px;
}

.dropdown:hover .dropdown-content{
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bab1ba), color-stop(1, #ededed));
	background:-moz-linear-gradient(top, #bab1ba 5%, #ededed 100%);
	background:-webkit-linear-gradient(top, #bab1ba 5%, #ededed 100%);
	background:-o-linear-gradient(top, #bab1ba 5%, #ededed 100%);
	background:-ms-linear-gradient(top, #bab1ba 5%, #ededed 100%);
	background:linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bab1ba', endColorstr='#ededed',GradientType=0);
	background-color:#bab1ba;
	display: block;
}

.dropdown:active {
	position:relative;
	top:1px;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

#prev_next:link, #prev_next:visited {
    background-color: $link_color1;
    color: black;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}

#prev_next:hover, #prev_next:active {
    background-color: $link_color2;
}

section {
	float:center;
	padding:10px;
	text-align:center;
	font-family: $font;
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

table {
	text-align: left;
	font-family: $font2;
}

a {
	text-decoration: none;
	color: black;
}

tr:hover {
    background-color:#e0e0d1 ;
} 

/* Apply padding to td elements that are direct children of the tr element. */
tr.spaceUnder > td
{
  padding-bottom: 1em;
}

CSS;

?>
