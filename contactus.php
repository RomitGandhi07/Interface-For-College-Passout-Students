<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php include_once('header.php');?>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<style>
/*
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/
/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset**/
@font-face {
	font-family: 'AmbleRegular';
    src: url( ../fonts/Amble-Light-webfont.ttf ) format("truetype"); 
}
body{
	font-family:Arial, Helvetica, sans-serif;
}
.wrap{
	width:80%;
	margin: 0 auto;
	transition:all .2s linear;
	-moz-transition:all .2s linear;
	-webkit-transition:all .2s linear; 
	-o-transition:all .2s linear; 
	-ms-transition:all .2s linear;
}
.header{
	background:url(../images/footer-bg.jpg);
	padding: 1% 0;
}
.logo{
	float: left;
}
.header-right {
	float: right;
	font-family: 'Francois One', sans-serif;
	margin-top: 10px;
}
.contact-info {
	text-align: right;
	text-transform: capitalize;
}
.contact-info ul li {
	font-size: 1em;
	color: #777;
	font-weight: 400;
	line-height: 1.8em;
}
.contact-info ul li img{
	vertical-align: middle;
}
.menu {
	margin-top: 1%;
}
.nav li {
	padding: 0px 16px;
	display: inline-block;
}
.nav li.active a {
	color:#F6107E;
}
.nav li a {
	text-transform: capitalize;
	line-height: 1.8em;
	font-weight: 400;
	color: #777;
	text-decoration: none;
	font-size: 1em;
}
/*--content--*/
.image-slider{
	background:#fff;
}
.main{
	background:#fff;
	min-height:600px;
}
.top-grid {
	text-align: center;
}
.top-grid h2 {
	font-family: 'AmbleRegular';
	color:#555;
	font-size:2em;
	line-height: 50px;
	border-bottom: 1px solid #ECEBEC;
	padding: 50px 0 35px;
}
/*  GRID OF THREE   ============================================================================= */
.content-top{
	border-top: 1px solid #ECEBEC;
	padding-top: 35px;
}
.col_1_of_3{
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col_1_of_3:first-child { margin-left: 0; }

.span_1_of_3 {
	width: 29.2%;
	padding:1.5%; 
	float:left;
}
.grid-img{
	text-align:center;
}
.span_1_of_3  h3, .span_2_of_3 h3{
	color: #000000;
	margin-bottom:0.5em;
	font-size:1.5em;
	line-height: 1.2;
	font-family: 'Francois One', sans-serif;
	font-weight : normal;
	margin-top: 0px;
	letter-spacing: -1px;
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_3{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:94%;
		padding:3%;  
	}
}
/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
     
     .wrap{
		width:95%;
	}		
	.col_1_of_3{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:92%;
		padding:4%;
	}
}
/*  GRID OF TWO   ============================================================================= */
.content-middle{
	margin-bottom: 2%;
}
.col_1_of_2{
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
	background:#F6107E;
}
.col_1_of_2:first-child { margin-left: 0; }
.span_1_of_2 {
	width: 46.2%;
	padding:1.5%;
}
.span_1_of_2  h3{
	color: #fff;
	margin-bottom:0.5em;
	font-size:1.5em;
	line-height: 1.2;
	font-family: 'Francois One', sans-serif;
	font-weight : normal;
	margin-top: 0px;
	letter-spacing: -1px;
}
.span_1_of_2  p{
	font-size:0.8125em;
	padding:0.5em  0;
	color:#FDD7E9;
	line-height: 1.5em;
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_2{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_2 {
		width:94%;
		padding:3%; 
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.span_2_of_2 {
		width: 100%; 
	}
	.col_1_of_2{ 
		margin: 2% 0 2% 0%;
	}
	.span_1_of_2 {
		width:92%;
		padding:4%;
	}
}
.head-text h2{
	color: #F6107E;
	font-size:2em;
	font-family: 'Francois One', sans-serif;
}
.head-text span{
	color:#333;
	font-size:13px;
	font-family:Arial, Helvetica, sans-serif;
}
.link1 {
	background: url("../images/marker1.gif") no-repeat scroll right 4px rgba(0, 0, 0, 0);
	color: #333;
	display: inline-block;
	font-size: 13px;
	padding-right:15px;
	text-decoration: underline;
	transition: all 0.4s ease 0s;
	font-family: 'AmbleRegular';
	float:right;
}
.link1:hover {
	text-decoration:none;
}
.button{
	text-align:center;
}
.link2 {
	background:#fff;
	padding:8px 30px;
	color: #333;
	display: inline-block;
	font-size: 13px;
	padding-right:15px;
	border-radius:2px;
	transition: all 0.4s ease 0s;
	font-family: 'AmbleRegular';
}
.link2:hover {
	text-decoration:underline;
}
/*  GRID OF Content and sidebar   ============================================================================= */
.cont{
	display: block;
	float:left;
	margin:0% 0 1% 0;
}
.lsidebar{
	display: block;
	float:left;
	margin: 1% 1.6% 1% 0;
	background: #F0F0F0;
} 	
.span_2_of_3 {
	width: 63.1%;
	padding:1.5%; 
	float:left;
}
.span_2_of_3  h2,
.span_1_of_3  h2 {
	color:#C94848;
	margin-bottom:0.5em;
	font-size:1.5em;
	line-height: 1.2;
	font-weight : normal;
	margin-top: 0px;
	letter-spacing: -1px;
}
.span_2_of_3 p,
.span_1_of_3  p  {
	font-size:0.8125em;
	padding:0.5em 0;
	color: #333;
	line-height: 1.5em;
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */

@media only screen and (max-width: 640px) {
	.wrap{
		width:95%;
	}
	.cont{ 
		margin: 1% 0 1% 0%;
	}
	.lsidebar{
		margin:0;
	}
	.span_2_of_3 {
		width:94%;
		padding:3%;  
	}
	.span_1_of_3 {
		width:94%;
		padding:3%; 
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.cont{ 
		margin: 1% 0 1% 0%;
	}
	.lsidebar{
		margin:0;
	}
	.span_2_of_3 {
		width:92%;
		padding:4%;
	}
	.span_1_of_3 {
		width:92%;
		padding:4%;
	}
}
.comment {
	background: url(../images/comment-left.png) 0 0 no-repeat;
	padding-left: 20px;
	margin-bottom: 9px;
	font-size: 16px;
}
.comment p {
	background: url(../images/comment-right.png) right bottom no-repeat;
}
p.upper {
	text-transform: uppercase;
	line-height: 1.8em;
	color: #888;
}
/*  GRID OF FOUR   ============================================================================= */
.col_1_of_4{
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col_1_of_4:first-child { margin-left: 0; } /* all browsers except IE6 and lower */
.span_1_of_4 {
	width: 20.8%;
	padding:1.5%; 
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_4{ 
		margin: 1% 0 1% 0%;
	}
}
/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_4{ 
		margin: 1% 0 1% 0%;
	}
}
/*--hover-image--*/
.single-set{
	overflow:hidden;
	padding:30px 10px 15px 10px ;
}
.container{
	border-radius:5px;
	position:relative;
	overflow:hidden;
	height:100px;
	-webkit-transition: all .5s ease-out;
	 -moz-transition: all .5s ease-out;
	 transition: all .5s ease-out;
}
.container:hover{
	opacity:1;
	cursor:pointer;
}
.text{
	 background:rgba(0,0,0,0.5);
 	color:white;
 	height:auto;width:inherit;
 	position:absolute;
}
.text a{
	color:#fff;  
 	display:block; 
 	padding:10px; 
 	font-size:16px;
 	font-weight:normal;
 	text-shadow:none;
 	text-decoration:none;
 	width:400px;
}
/* CSS3 Top Effect */
article.css3-1{
	 top:-70px;left:0;
 	-webkit-transition: all .5s ease-out;
 	-moz-transition: all .5s ease-out;
 	-o-transition: all .5s ease-out;
 	transition: all .5s ease-out;
}
.text a.css3-1{
 	-webkit-transition: all .4s ease-out;
 	-moz-transition: all .4s ease-out;
 	-o-transition: all .5s ease-out;
 	transition: all .4s ease-out;
}
.text a.css3-1:hover{  
 	color:#d0206a;
 	text-decoration:none;  
}
.container:hover article.css3-1{
 	top:0;
}
/* CSS3 Bottom Effect */
article.css3-2{
 	bottom:-70px;left:0;
 	-webkit-transition: all .5s ease-out;
 	-moz-transition: all .5s ease-out;
 	-o-transition: all .5s ease-out;
 	transition: all .5s ease-out;
}
.text a.css3-2{
 	-webkit-transition: all .4s ease-out;
 	-moz-transition: all .4s ease-out;
 	-o-transition: all .5s ease-out;
 	transition: all .4s ease-out;
}
.text a.css3-2:hover{  
 	color:#d0206a;
 	text-decoration:none;  
}
.container:hover article.css3-2{
 	bottom:0;
}
/* CSS3 Right Effect */
article.css3-3{
 	right:-400px;top:0;
 	-webkit-transition: all .5s ease-out;
 	-moz-transition: all .5s ease-out;
 	-o-transition: all .5s ease-out;
 	transition: all .5s ease-out;
 	width:400px;
}
.text a.css3-3{
 	-webkit-transition: all .4s ease-out;
 	-moz-transition: all .4s ease-out;
 	-o-transition: all .5s ease-out;
 	transition: all .4s ease-out;
}
.text a.css3-3:hover{  
 	color:#d0206a;
 	text-decoration:none;  
}
.container:hover article.css3-3{
 	right:0;
}
/* CSS3 Left Effect */
article.css3-4{
 	left:-400px;bottom:0;
 	-webkit-transition: all .5s ease-out;
 	-moz-transition: all .5s ease-out;
 	-o-transition: all .5s ease-out;
 	transition: all .5s ease-out;
 	width:400px;
}
.text a.css3-4{
 	-webkit-transition: all .4s ease-out;
 	-moz-transition: all .4s ease-out;
 	-o-transition: all .5s ease-out;
 	transition: all .4s ease-out;
}
.text a.css3-4:hover{  
 	color:#fff;
 	text-decoration:none;  
}
.container:hover article.css3-4{
 	left:0;
}
.span_1_of_a{
	width: 21.8%;
}
/*--footer--*/
.footer-menu{
	text-align:center;
	font-family: 'Francois One', sans-serif;
}
.footer-top{
	background:#333;
	padding:1% 0;
}
.footer{
	background: url(../images/footer-bg.jpg);
}
.grid2-l-desc {
	float: left;
	width: 68%;
}
.grid2-l-desc p {
	font-size: 13px;
	color:#888;
	vertical-align: top;
	padding: 10px;
}
.grid2-l-img {
	float: left;
	width: 32%;
}
.col_1_of_f{
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.span_1_of_f h3 {
	color:#999;
	margin-bottom: 0.5em;
	font-size: 1.5em;
	line-height: 1.2;
	font-family: 'Francois One', sans-serif;
	font-weight: normal;
	margin-top: 0px;
	letter-spacing: -1px;
}
.span_1_of_f{
	width: 45.2%;
	padding: 1.5%;
}
form span {
	display: block;
	color: #888;
	font-size: 13px;
}
.sub-footer1 label {
	color: #777;
	font-size: 13px;
}
.sub-footer1 input[type="text"] {
	background:#CACACA;
	width: 95%;
	padding: 5px;
	border: none;
	outline: none;
	margin-bottom: 15px;
	-webkit-border-radius: .2em;
	-moz-border-radius: .2em;
	border-radius: .2em;
	margin-top: 5px;
	color: #888;
}
.sub-footer1 textarea {
	width: 95%;
	padding: 5px;
	outline: none;
	background:#CACACA;
	height:80px;
	border: none;
	-webkit-border-radius: .2em;
	-moz-border-radius: .2em;
	border-radius: .2em;
	margin-top: 5px;
	resize: none;
	color: #888;
	margin-bottom: 15px;
}
.sub-footer1 input[type="submit"]{
	background:#F6107E;
	padding: 8px 20px;
	cursor: pointer;
	color: #FFF;
	font-size:13px;
	border: 1px solid #F6107E;
	margin-bottom: 10px;
	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
	 0px 0px 0px 3px #FEFEFE,
	 0px 5px 3px 3px #D2D2D2;
	-moz-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
	 0px 0px 0px 3px rgb(254, 254, 254),
	 0px 5px 3px 3px rgb(210, 210, 210);
	box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
	 0px 0px 0px 3px #FEFEFE,
	 0px 5px 3px 3px #D2D2D2;
	-webkit-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
    font-family:Arial, Helvetica, sans-serif;
    position:absolute;
}
.sub-footer1 input[type="submit"]:hover{
	background-color:#DA076C;
}
.footer-nav li {
	padding: 0px 16px;
	display: inline-block;
}
.footer-nav li a {
	text-transform: capitalize;
	line-height: 1.8em;
	font-weight: 400;
	color: #fff;
	text-decoration: none;
	font-size: 1em;
}
.footer-nav li a:hover {
	color:#F8C3DC;
}
.copy{
	text-align:center;
	padding: 2% 0;
}
.copy p{
	font-size:13px;
	color:#333;
}
.copy p a{
	color:#F6107E;
}
.copy p a:hover{
	color:#333;
}
/*--About--*/
.about-top{
	margin-bottom:1%;
}
.heading {
	padding: 3% 0 0%;
}
.heading h3 {
	color: #F6107E;
	font-size: 1.8em;
	margin-bottom: 1%;
	font-family: 'Francois One', sans-serif;
}
.heading p {
	font-size: 0.8125em;
	margin-bottom: 2%;
	color: #333;
	line-height: 1.5em;
}
.about-topgrid1 {
	width: 29%;
	float: left;
	margin-right: 5%;
}
.about-topgrid1 img{
	margin-bottom:20px;
}
.about-topgrid1 h3 {
	color:#F6107E;
	font-size: 24px;
	padding: 10px 0px 10px 0px;
	border-bottom: 1px dotted #C0C0C0;
	margin-bottom: 13px;
	font-family: 'Francois One', sans-serif;
}
.about-topgrid1 h5 {
	color: #333;
	font-size: 13px;
	line-height: 1.5em;
	padding-bottom:15px;
}
.about-topgrid1 p {
	font-size: 0.8125em;
	color: #555;
	line-height: 1.5em;
	padding: 4px 0px 8px 0px;
}
.about-histore {
	float: left;
	width: 30%;
}
.about-histore h3 {
	color:#F6107E;
	font-size: 24px;
	padding: 10px 0px 10px 0px;
	border-bottom: 1px dotted #C0C0C0;
	margin-bottom: 13px;
	font-family: 'Francois One', sans-serif;
}
.about-histore ul li span {
	color: #000;
	font-size: 14px;
	padding: 15px 0px 15px 0px;
	margin-bottom: 13px;
	float: left;
	width: 15%;
}
.about-histore ul li p {
	font-size: 0.8125em;
	color: #555;
	line-height: 1.5em;
	padding: 4px 0px 8px 0px;
	float: right;
	width: 83%;
}
.client {
	margin-bottom: 20px;
}
.about-team-left {
	float: left;
	width: 25%;
}
.about-team-left img {
	opacity: 5;
	transition: all 300ms!important;
	-webkit-transition: all 300ms!important;
	-moz-transition: all 300ms!important;
}
.about-team-left img {
	opacity: 1;
	-webkit-filter: grayscale(0%);
	cursor: pointer;
}
.about-team-left img:hover {
	-webkit-filter: grayscale(50%);
	opacity: 5;
	transition: all 300ms!important;
	-webkit-transition: all 300ms!important;
	-moz-transition: all 300ms!important;
}
.about-team-right {
	float: right;
	width: 73%;
}
.about-team-right p {
	color: #6A6A6A;
	font-size:13px;
	padding: 0px 0 10px 0;
	line-height: 1.8em;
}
.about-services {
	width: 30%;
	float: left;
	margin-left: 5%;
}
.about-services h3 {
	color: #F6107E;
	font-size: 24px;
	padding: 10px 0px 10px 0px;
	border-bottom: 1px dotted #C0C0C0;
	margin-bottom: 13px;
	font-family: 'Francois One', sans-serif;
}
/*--gallery--*/
/*  GRID OF FIVE   ============================================================================= */
.gallery{
	margin-bottom:2%;
}
.col_1_of_5{
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
	background: #F0F0F0;
}
.col_1_of_5:first-child { margin-left: 0; }
.span_1_of_5 {
   width:18.72%;
}
a.fancybox img{
	display:block;
}
.span_1_of_5  h3{
	color:#C94848;
	margin-bottom: .5em;
	font-size:1.5em;
	line-height: 1.2;
	font-weight : normal;
	margin-top: 0px;
	letter-spacing: -1px;
}
.span_1_of_5   p {
	font-size:0.8125em;
	padding:0.5em 0;
	color:#333333;
	line-height: 1.5em;
}
/*--404--*/
.page-not-found {
	padding: 30px 0;
}
.page-not-found h1 {
	font-size: 15em;
	color: #F0F0F0;
	text-align: center;
	text-shadow: 1px 1px 6px #AAA;
	-moz-text-shadow: 1px 1px 6px #aaa;
	-webkit-text-shadow: 1px 1px 6px #aaa;
	-o-text-shadow: 1px 1px 6px #aaa;
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
 @media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_5{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_5 {
		width:94%;
		padding:3%;  
	}
}
/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
 @media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_5{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_5 {
		width:92%;
		padding:4%;
	}
}
/*--contact--*/
/*  Contact Form  ============================================================================= */
.contact{
	margin-bottom:2%;
}
.col:first-child{
	margin-left:0;
}	
.contact-form{
	position:relative;
	padding-bottom:30px;
}
.contact-form div{
	padding:5px 0;
}
.contact-form span{
	display:block;
	font-size:0.8125em;
	color: #333;
	padding-bottom:5px;
}
.contact-form input[type="text"],.contact-form textarea{
	padding:8px;
	display:block;
	width:98%;
	background-color: #e9ecef;
	opacity: 1;
	border: none;
	outline:none;
	color:#464646;
	font-size:0.8125em;
	font-family:Arial, Helvetica, sans-serif;
	box-shadow: 0 0 2px #AAA;
	-webkit-box-shadow: 0 0 2px #AAA;
	-moz-box-shadow: 0 0 2px #AAA;
	-o-box-shadow: 0 0 2px #AAA;
	-webkit-appearance:none;
}
.contact-form input[type="text"]:hover, .contact-form textarea:hover{
	box-shadow: 0 0 5px #AAA;
	-webkit-box-shadow: 0 0 5px #AAA;
	-moz-box-shadow: 0 0 5px #AAA;
	-o-box-shadow: 0 0 5px #AAA;
}
.contact-form textarea{
	resize:none;
	height:120px;		
}
.contact-form input[type="submit"]{
	background:#000000;
	padding: 8px 20px;
	cursor: pointer;
	color: #FFF;
	font-size:13px;
	border: 1px solid #000000;
	margin-bottom: 10px;
	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
	 0px 0px 0px 3px #FEFEFE,
	 0px 5px 3px 3px #D2D2D2;
	-moz-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
	 0px 0px 0px 3px rgb(254, 254, 254),
	 0px 5px 3px 3px rgb(210, 210, 210);
	box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
	 0px 0px 0px 3px #FEFEFE,
	 0px 5px 3px 3px #D2D2D2;
	-webkit-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
    font-family:Arial, Helvetica, sans-serif;
    position:absolute;
    right:0;
}
.contact-form input[type="submit"]:hover{
	background-color:#DA076C;
}
.contact-form input[type="submit"]:active{
	background-color:#DA076C; 
}
.company_address p{
	font-size:0.8125em;
	color:#333;
}
.company_address p span{
	text-decoration:underline;
	color:#333;
	cursor:pointer;
}
.company_address p span:hover{
	text-decoration:none;
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 800 PIXELS */

@media only screen and (max-width: 800px) {
	.wrap{
		width:95%;
	}
	.span_2_of_3 {
		width:94%;
		padding:3%; 
	}
	.col{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:94%;
		padding:3%; 
	}
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.span_2_of_3 {
		width:94%;
		padding:3%; 
	}
	.col{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:94%;
		padding:3%; 
	}
   .contact-form input[type="text"],.contact-form textarea{
		width:97%;
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.span_2_of_3 {
		width:90%;
		padding:5%; 
	}
	.col { 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:90%;
		padding:5%; 
	}
	.contact-form input[type="text"],.contact-form textarea{
		width:92%;
	}
}
.map{
	margin-top:4%;
	margin-bottom: 15px;
}
/*--services--*/
.services-block{
	margin-bottom:10px;
}
.services-block-last{
	padding-bottom:3%;
}
.listview_1_of_2:first-child {
	margin-left: 0;
}
.images_1_of_2 {
	width: 46%;
	padding: 1.5%;
	margin-top: 11px;
	box-shadow: 0px 0px 10px rgba(255, 181, 237, 0.26);
	-webkit-box-shadow: 0px 0px 10px rgba(255, 181, 237, 0.26);
	-moz-box-shadow: 0px 0px 10px rgba(255, 181, 237, 0.26);
	-o-box-shadow: 0px 0px 10px rgba(255, 181, 237, 0.26);
	border: 1px solid rgba(192, 192, 192, 0.28);
}
.listview_1_of_2 {
	display: block;
	float: left;
	margin: 0% 0 0% 1.6%;
}
.images_1_of_2 img {
	max-width: 100%;
	display: block;
	cursor:pointer;
	border:3px solid #fff;
	box-shadow:0 0 5px #aaa;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
}
.images_1_of_2 img:hover {
	border:3px solid #F6107E;
}
.listimg_2_of_1 {
	width: 29.2%;
}
.listimg {
	display: block;
	float: left;
}
.list_2_of_1 {
	width: 65.2%;
}
.services{
	display: block;
	float: left;
	margin: 0% 0 0% 3.6%;
}
.list_2_of_1 h3 {
	font-family: 'Francois One', sans-serif;
	color: #999;
	font-size: 1.2em;
	text-transform: uppercase;
	margin-bottom: 10px;
}
.list_2_of_1 p {
	font-size: 0.9em;
	padding: 0.1em 0 0.1em 0;
	color: #777;
	line-height: 1.6em;
}
.list_2_of_1 .button1 a {
	font-family: 'Francois One', sans-serif;
	color: #FFF;
	font-size:13px;
	text-transform: uppercase;
	background: #000000;
	padding: 5px 15px;
	display: inline-block;
	-webkit-transition: all 0.3s ease-out;
	-moz-transition: all 0.3s ease-out;
	-ms-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
}
.list_2_of_1 .button1 a:hover {
	background:#000000;
}
.list_2_of_1 .button1 {
	line-height: 1.7em;
	margin-top: 0.5em;	
}

/*--responsive design--*/
@media (max-width:1366px){
	.wrap{
		width:90%;
	}	
}
@media (max-width:1280px){
	.wrap{
		width:90%;
	}	
	.top-grid h2 {
		font-size: 1.8em;
	}
}
@media (max-width:1080px){
	.top-grid h2 {
		font-size: 1.5em;
		line-height: 46px;
		padding: 31px 0 26px;
	}
	.span_1_of_3 h3, .span_2_of_3 h3 {
		font-size: 1.3em;
	}
	.span_1_of_4 {
		padding: 0;
	}
	.container {
		height: auto;
	}
	.lsidebar {
		margin: 1% 1.6% 4% 0;
	}
	.images_1_of_2 {
		width: 45%;
	}
	.lsidebar.span_1_of_3 {
		width: 100%;
		float: none;
	}
	.comment {
		padding: 0 20px;
	}
	.cont.span_2_of_3 {
		width: 100%;
		padding: 1.5%;
		float: none;
	}
	.span_1_of_4 {
  	  width: 17.8%;
	}
}
@media (max-width:1024px){
	.wrap{
		width:90%;
	}	
	.text a {
		padding: 5px;
		font-size: 14px;
	}
	.comment {
		font-size: 13px;
	}
	.top-grid h2 {
		line-height: 40px;
	}
	.span_1_of_3 h3, .span_2_of_3 h3 {
		font-size: 1.2em;
	}
	.head-text h2 {
		font-size: 1.8em;
	}
	.about-topgrid1 h3, .about-histore h3, .about-services h3{
		font-size:20px;
	}
	.images_1_of_2 {
		width: 45.9%;
	}
	.list_2_of_1 h3 {
		margin-bottom: 2px;
	}
	.list_2_of_1 .button1 {
		line-height: 1.4em;
	}
}
@media (max-width:991px){
	.about-services {
		width: 33%;
		float: left;
		margin-left: 3%;
	}
	.page-not-found h1 {
		font-size: 13em;
	}
	.main.fourth {
		min-height: 400px;
	}
}
@media (max-width:900px){
	.top-grid h2 {
		font-size: 1.3em;
		padding: 25px 0 26px;
	}
	.span_1_of_3 h3, .span_2_of_3 h3 {
		font-size: 1.1em;
	}
}
@media (max-width:800px){
	.wrap{
		width:90%;
	}	
	.span_1_of_3 {
		padding: 2%;
	}
	.text a {
		padding: 5px;
		font-size: 14px;
	}
	.comment {
		font-size: 13px;
	}
	.top-grid h2 {
		font-size: 1.8em;
		line-height: 40px;
	}
	.span_1_of_3 h3, .span_2_of_3 h3 {
		font-size: 1.2em;
	}
	.head-text h2 {
		font-size: 1.8em;
	}
	.about-topgrid1 h3, .about-histore h3, .about-services h3{
		font-size:20px;
	}
	.span_1_of_f {
		width:100%;
		padding:0;
	}
	.copy {
		padding: 6% 0;
	}
	.top-grid h2 {
		font-size: 1.2em;
		padding: 19px 0 20px;
	}
	.col_1_of_3 {
		margin: 1% 0 3% 1.6%;
	}
	.col_1_of_3.span_1_of_3 {
		padding: 0;
	}
	.link1 {
		margin-top: 1em;
	}
	.span_1_of_2 h3 {
		font-size: 1.3em;
	}
	.about-topgrid1 {
		width: 100%;
		float: none;
		margin-right: 0;
	}
	.about-histore {
		float: none;
		width: 100%;
	}
	.about-services {
		width: 100%;
		float: none;
		margin-left: 0;
	}
	.about-team-left {
		float: left;
		width: 17%;
	}
	.about-team-right {
		float: right;
		width: 83%;
		margin-top: 22px;
	}
}
@media (max-width:768px){
	.top-grid h2 {
		font-size: 1.1em;
		padding: 18px 0 20px;
	}
	.span_1_of_4 {
		width: 23.8%;
	}
	.list_2_of_1 h3 {
		font-size: 1.1em;
	}
	.list_2_of_1 p {
		font-size: 0.8em;
	}
	.list_2_of_1 .button1 a {
		padding: 4px 15px;
	}
}
@media (max-width:736px){
	.wrap {
		width: 92%;
	}
	.images_1_of_2 {
		width: 44.9%;
	}
}
@media (max-width:667px){
	.logo {
		float: left;
		width: 35%;
	}
	.nav li {
		padding: 0px 12px;
	}
	.top-grid h2 {
		font-size: 1em;
		line-height: 30px;
	}
	.list_2_of_1 h3 {
		font-size: 1em;
	}
	.about-team-left {
		float: left;
		width: 20%;
	}
	.about-team-right {
		float: right;
		width: 79%;
		margin-top: 12px;
	}
	.main.fourth {
		min-height: 379px;
	}
	.page-not-found h1 {
		font-size: 11em;
	}
}
@media (max-width:640px){
	.wrap{
		width:90%;
	}	
	.text a {
		padding: 5px;
		font-size: 14px;
	}
	.comment {
		font-size: 13px;
	}
	.span_1_of_3 h3, .span_2_of_3 h3 {
		font-size: 1.2em;
	}
	.head-text h2 {
		font-size: 1.8em;
	}
	.about-topgrid1 h3, .about-histore h3, .about-services h3{
		font-size:20px;
	}
	.span_1_of_f {
		width:100%;
		padding:0;
	}
	.copy {
		padding: 11% 0 5%;
	}
	.logo {
		width: 38%;
	}
	.nav li {
		padding: 0px 8px;
	}
	.about-topgrid1 {
		width:100%;
		float:none;
		margin-right:0px;
	}
	.about-histore {
		float:none;
		width:100%;
	}
	.about-services {
		width:100%;
		float:none;
		margin-left:0px;
	}
	.images_1_of_2 {
		width: 100%;
	}
	.listview_1_of_2 {
		margin: 0% 0 20px 0%;
	}
	.span_1_of_4 {
		width: 22.8%;
		padding: 5px;
	}
	.span_1_of_5 {
		width: 100%;
		padding: 2%;
		text-align: center;
	}
	.map iframe {
		height: 200px;
	}
}
@media (max-width:568px){
	.nav li {
		padding: 0px 6px;
	}
}
@media (max-width:480px){
	.wrap{
		width:90%;
	}	
	.span_1_of_4 {
		width: 39.8%;
		padding: 8px;
	}
	.text a {
		padding:3px;
		font-size: 13px;
	}
	.comment {
		font-size: 13px;
	}
	.top-grid h2 {
		line-height: 26px;
		padding: 14px 0 17px;
	}
	.span_1_of_3 h3, .span_2_of_3 h3 {
		font-size: 1.2em;
	}
	.head-text h2 {
		font-size: 1.8em;
	}
	.about-topgrid1 h3, .about-histore h3, .about-services h3{
		font-size:20px;
	}
	.span_1_of_f {
		width:100%;
		padding:0;
		margin-top: 30px;
	}
	.copy {
		padding:15% 0 5%;
	}
	.logo {
		width: 38%;
	}
	.nav li {
		padding: 0px 2px;
	}
	.about-topgrid1 {
		width:100%;
		float:none;
		margin-right:0px;
	}
	.about-histore {
		float:none;
		width:100%;
	}
	.about-services {
		width:100%;
		float:none;
		margin-left:0px;
	}
	.contact-info ul li {
		font-size:13px;
	}
	.nav li a {
		font-size: 15px;
	}
	.heading h3 {
		font-size: 1.3em;
	}
	.contact-info ul li {
		font-size: 12px;
	}
	.about-team-right {
		width: 77%;
		margin-top: 8px;
	}
	.about-team-right p {
		font-size: 12px;
	}
	.main.fourth {
		min-height: 300px;
	}
	.page-not-found h1 {
		font-size: 9em;
	}
}
@media (max-width:414px){
	.logo {
		width: 100%;
		text-align: center;
		float: none;
	}
	.logo img {
		width: 52%;
	}
	.header-right {
		float: none;
	}
	.contact-info {
		text-align: center;
	}
	.menu {
		text-align: center;
	}
	.nav li {
		margin: 2% 0;
		padding: 0px 8px;
	}
	.top-grid h2 {
		font-size: .9em;
	}
	.span_2_of_3 p, .span_1_of_3 p {
		font-size: 0.8em;
		line-height: 1.8em;
	}
	.main.fourth {
		min-height: 236px;
	}
}
@media (max-width:384px){
	.client {
		margin-bottom: 10px;
	}
	.grid2-l-img {
		float: none;
		width: 100%;
		margin: 10px;
	}
	.grid2-l-desc {
		float: none;
		width: 100%;
	}
	.page-not-found h1 {
		font-size: 7em;
	}
	.main.fourth {
		min-height: 220px;
	}
}
@media (max-width:375px){
	.map iframe {
		height: 180px;
	}
}
@media (max-width:320px){
	.wrap{
		width:90%;
	}	
	.container {
		height:100px;
	}
	.text a {
		padding:3px;
		font-size: 13px;
	}
	.comment {
		font-size: 13px;
	}
	.top-grid h2 {
		font-size: .8em;
		line-height: 24px;
	}
	.span_1_of_3 h3, .span_2_of_3 h3 {
		font-size: 1.1em;
	}
	.span_2_of_3 p, .span_1_of_3 p {
		font-size: 0.75em;
		padding: 0;
	}
	.head-text h2 {
		font-size: 1.2em;
	}
	.span_1_of_4 {
		width: 61%;
	}
	.head-text h2 {
		font-size: 1.5em;
	}
	.about-topgrid1 h3, .about-histore h3, .about-services h3{
		font-size:20px;
	}
	.span_1_of_f {
		width:100%;
		padding:0;
		margin-top: 30px;
	}
	.copy {
		padding:20% 0 11%;
	}
	.nav li {
		padding: 0px 4px;
	}
	.about-topgrid1 {
		width:100%;
		float:none;
		margin-right:0px;
	}
	.about-histore {
		float:none;
		width:100%;
	}
	.about-services {
		width:100%;
		float:none;
		margin-left:0px;
	}
	.logo img {
		width: 54%;
	}
	.nav li a {
		font-size: 14px;
	}
	.heading h3 {
		font-size: 1.3em;
	}
	.header-right {
		float:none;
	}
	.contact-info {
		text-align: center;
	}
	.span_1_of_2 h3 {
		font-size:1.2em;
	}
	.footer-nav li {
		padding: 0px 7px;
	}
	.footer-nav li a {
		font-size:15px;
	}
	.copy p {
		line-height: 1.9;
	}
	.about-team-right {
		margin-top: 0;
	}
	.page-not-found h1 {
		font-size: 6em;
	}
	.main.fourth {
		min-height: 160px;
	}
}


</style>
</head>
<body>

	<div class="main">
		<div class="wrap">
			 <div class="map">
				<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#000000;text-align:left;font-size:12px">View Larger Map</a></small>
			 </div>
			<div class="contact">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form>
					    	<div class="form-group">
                    <label for="fullName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="fullName"  class="form-control" readonly>
    
							</div>
							</div>
						    <div class="form-group">
                    <label for="fullName" class="col-sm-3 control-label">E-Mail</label>
                    <div class="col-sm-6">
                        <input type="text" id="fullName"  class="form-control" readonly>
    
							</div>
							</div>
							<div class="form-group">
                    <label for="fullName" class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-6">
                        <input type="text" id="fullName"  class="form-control" readonly>
    
							</div>
							</div>
							<div class="form-group">
                    <label for="fullName" class="col-sm-3 control-label">Message</label>
                    <div class="col-sm-6">
                        <textarea rows="4" cols="4">
						</textarea>
    
							</div>
							</div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="company_address">
				     	<h3>Contact Information</h3>
				     	<p>“” is the site where the pass-out students can interact with their corresponding Universities for the request of their any University related documents. 
						In the real life the pass-out students need any document in most of the cases they need to visit the universities and need to fill long forms and then the whole process may take more than one day. Some students may not be un vicinity of the society then they might not be present for any reasons.</p>
						<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="mailto:@example.com">info@eduinterface.com</a></span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				    </div>
				 </div>
				 <div class="clear"></div>
			  </div>
		   </div>
		</div>
	
	

</body>
</html>
