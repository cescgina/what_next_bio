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
	color: black;
	font-size: 150%;
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
	margin: 50px auto;
	top: 200px;
	position: absolute;
	z-index: 1;
}

#page-wrap {
	width: 70%;
	margin-left: 20%;
	margin-right: 20%;
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
	vertical-align:middle;
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
  padding-bottom: 3em;
}


div label input {
   margin-right:100px;
}

#preferences {
    font-family:sans-serif;
}

/*orange-buttons */
#ck-button-biomed {
  -moz-box-shadow:inset 0px 1px 0px 0px #fce2c1;
  -webkit-box-shadow:inset 0px 1px 0px 0px #fce2c1;
  box-shadow:inset 0px 1px 0px 0px #fce2c1;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25));
  background:-moz-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:-webkit-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:-o-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:-ms-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:linear-gradient(to bottom, #ffc477 5%, #fb9e25 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25',GradientType=0);
  background-color:#ffc477;
  -moz-border-radius:6px;
  -webkit-border-radius:6px;
  border-radius:6px;
  border:1px solid #eeb44f;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #cc9f52;
}

#ck-button-biomed label {
    float:left;
    width:10.0em;
}

#ck-button-biomed label span {
    text-align:center;
    padding:3px 0px;
    display:block;
    border-radius:4px;
}

#ck-button-biomed label input {
    position:absolute;
    top:20px;
}

#ck-button-biomed: input:hover + span {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
  background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
  background-color:#fb9e25;
}

#ck-button-biomed input:checked + span {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
  background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
  background-color:#fb9e25
}
#ck-button-biomed input:checked:hover + span {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
  background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
  background-color:#fb9e25;
}

#ck-button-biochem {
	-moz-box-shadow:inset 0px 1px 0px 0px #f9eca0;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f9eca0;
	box-shadow:inset 0px 1px 0px 0px #f9eca0;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f0c911), color-stop(1, #f2ab1e));
	background:-moz-linear-gradient(top, #f0c911 5%, #f2ab1e 100%);
	background:-webkit-linear-gradient(top, #f0c911 5%, #f2ab1e 100%);
	background:-o-linear-gradient(top, #f0c911 5%, #f2ab1e 100%);
	background:-ms-linear-gradient(top, #f0c911 5%, #f2ab1e 100%);
	background:linear-gradient(to bottom, #f0c911 5%, #f2ab1e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f0c911', endColorstr='#f2ab1e',GradientType=0);
	background-color:#f0c911;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #d1c110;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ded17c;
}

#ck-button-biochem label {
    float:left;
    width:10.0em;
}

#ck-button-biochem label span {
    text-align:center;
    padding:3px 0px;
    display:block;
    border-radius:4px;
}

#ck-button-biochem label input {
    position:absolute;
    top:20px;
}

#ck-button-biochem: input:hover + span {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
  background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
  background-color:#fb9e25;
}

#ck-button-biochem input:checked + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f2ab1e), color-stop(1, #f0c911));
	background:-moz-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
	background:-webkit-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
	background:-o-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
	background:-ms-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
	background:linear-gradient(to bottom, #f2ab1e 5%, #f0c911 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f2ab1e', endColorstr='#f0c911',GradientType=0);
	background-color:#f2ab1e;
}
#ck-button-biochem input:checked:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f2ab1e), color-stop(1, #f0c911));
	background:-moz-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
	background:-webkit-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
	background:-o-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
	background:-ms-linear-gradient(top, #f2ab1e 5%, #f0c911 100%);
	background:linear-gradient(to bottom, #f2ab1e 5%, #f0c911 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f2ab1e', endColorstr='#f0c911',GradientType=0);
	background-color:#f2ab1e;
}

/*green-buttons */
#ck-button-bioinfo {
	-moz-box-shadow:inset 0px 1px 0px 0px #3dc21b;
	-webkit-box-shadow:inset 0px 1px 0px 0px #3dc21b;
	box-shadow:inset 0px 1px 0px 0px #3dc21b;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #5cbf2a));
	background:-moz-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-webkit-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-o-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-ms-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#5cbf2a',GradientType=0);
	background-color:#44c767;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}

#ck-button-bioinfo label {
    float:left;
    width:10.0em;
}

#ck-button-bioinfo label span {
    text-align:center;
    padding:3px 0px;
    display:block;
    border-radius:4px;
}

#ck-button-bioinfo label input {
    position:absolute;
    top:20px;
}

#ck-button-bioinfo: input:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
	background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
	background-color:#5cbf2a;
}

#ck-button-bioinfo input:checked + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
	background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
	background-color:#5cbf2a;
}
#ck-button-bioinfo input:checked:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
	background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
	background-color:#5cbf2a;
}

#ck-button-biotech {
	-moz-box-shadow:inset 0px 1px 0px 0px #a4e271;
	-webkit-box-shadow:inset 0px 1px 0px 0px #a4e271;
	box-shadow:inset 0px 1px 0px 0px #a4e271;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #89c403), color-stop(1, #77a809));
	background:-moz-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-webkit-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-o-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-ms-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:linear-gradient(to bottom, #89c403 5%, #77a809 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#89c403', endColorstr='#77a809',GradientType=0);
	background-color:#89c403;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #74b807;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528009;
}

#ck-button-biotech label {
    float:left;
    width:10.0em;
}

#ck-button-biotech label span {
    text-align:center;
    padding:3px 0px;
    display:block;
    border-radius:4px;
}

#ck-button-biotech label input {
    position:absolute;
    top:20px;
}

#ck-button-biotech: input:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403));
	background:-moz-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-webkit-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-o-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-ms-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403',GradientType=0);
	background-color:#77a809;
}

#ck-button-biotech input:checked + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403));
	background:-moz-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-webkit-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-o-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-ms-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403',GradientType=0);
	background-color:#77a809;
}
#ck-button-biotech input:checked:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403));
	background:-moz-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-webkit-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-o-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-ms-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403',GradientType=0);
	background-color:#77a809;
}

/*blue-buttons */
#ck-button-bioenv {
	-moz-box-shadow:inset 0px 1px 0px 0px #9fb4f2;
	-webkit-box-shadow:inset 0px 1px 0px 0px #9fb4f2;
	box-shadow:inset 0px 1px 0px 0px #9fb4f2;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
	background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
	background-color:#7892c2;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}

#ck-button-bioenv label {
    float:left;
    width:10.0em;
}

#ck-button-bioenv label span {
    text-align:center;
    padding:3px 0px;
    display:block;
    border-radius:4px;
}

#ck-button-bioenv label input {
    position:absolute;
    top:20px;
}

#ck-button-bioenv: input:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}

#ck-button-bioenv input:checked + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}
#ck-button-bioenv input:checked:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}

#ck-button-biomicro {
	-moz-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #007dc1), color-stop(1, #0061a7));
	background:-moz-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-webkit-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-o-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-ms-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#007dc1', endColorstr='#0061a7',GradientType=0);
	background-color:#007dc1;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}

#ck-button-biomicro label {
    float:left;
    width:10.0em;
}

#ck-button-biomicro label span {
    text-align:center;
    padding:3px 0px;
    display:block;
    border-radius:4px;
}

#ck-button-biomicro label input {
    position:absolute;
    top:20px;
}

#ck-button-biomicro: input:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
	background-color:#0061a7;
}

#ck-button-biomicro input:checked + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
	background-color:#0061a7;
}
#ck-button-biomicro input:checked:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
	background-color:#0061a7;
}

/*violet-button */
#ck-button-biogen {
	-moz-box-shadow:inset 0px 1px 0px 0px #efdcfb;
	-webkit-box-shadow:inset 0px 1px 0px 0px #efdcfb;
	box-shadow:inset 0px 1px 0px 0px #efdcfb;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfbdfa), color-stop(1, #bc80ea));
	background:-moz-linear-gradient(top, #dfbdfa 5%, #bc80ea 100%);
	background:-webkit-linear-gradient(top, #dfbdfa 5%, #bc80ea 100%);
	background:-o-linear-gradient(top, #dfbdfa 5%, #bc80ea 100%);
	background:-ms-linear-gradient(top, #dfbdfa 5%, #bc80ea 100%);
	background:linear-gradient(to bottom, #dfbdfa 5%, #bc80ea 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfbdfa', endColorstr='#bc80ea',GradientType=0);
	background-color:#dfbdfa;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #c584f3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #9752cc;
}

#ck-button-biogen label {
    float:left;
    width:10.0em;
}

#ck-button-biogen label span {
    text-align:center;
    padding:3px 0px;
    display:block;
    border-radius:4px;
}

#ck-button-biogen label input {
    position:absolute;
    top:20px;
}

#ck-button-biogen: input:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc80ea), color-stop(1, #dfbdfa));
	background:-moz-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:-webkit-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:-o-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:-ms-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:linear-gradient(to bottom, #bc80ea 5%, #dfbdfa 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc80ea', endColorstr='#dfbdfa',GradientType=0);
	background-color:#bc80ea;
}

#ck-button-biogen input:checked + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc80ea), color-stop(1, #dfbdfa));
	background:-moz-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:-webkit-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:-o-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:-ms-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:linear-gradient(to bottom, #bc80ea 5%, #dfbdfa 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc80ea', endColorstr='#dfbdfa',GradientType=0);
	background-color:#bc80ea;
}
#ck-button-biogen input:checked:hover + span {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc80ea), color-stop(1, #dfbdfa));
	background:-moz-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:-webkit-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:-o-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:-ms-linear-gradient(top, #bc80ea 5%, #dfbdfa 100%);
	background:linear-gradient(to bottom, #bc80ea 5%, #dfbdfa 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc80ea', endColorstr='#dfbdfa',GradientType=0);
	background-color:#bc80ea;
}

#nav_button {
	color: black;
	width: 130px;
	height: 35px;
	text-align: center;
}

#check {
	display: none;
}

input.checks:hover+label {
	border-radius: 25px; 
	border: solid black 1px;
}

input.checks:checked+label{ 
	background-color: #0074D9; 
	border-radius: 20px; 
} 
CSS;

?>
