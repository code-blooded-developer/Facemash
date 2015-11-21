<?php

require_once "fbaccess.php";

?>
<html>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Who's Hot</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="skeleton.css">
    <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>

	

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<style>
@charset "utf-8";
/* CSS Document */

body {
	background-color:#f9f9f9;
	text-align:center;}

h1, h2, h3, h4, h5, h6 {font-family: 'Montez', cursive;
color:#2d2d2d;}

h1 {
	font-size:46px;}
h3 {
	font-size:28px;}
a {color:#FF9715;}
a:hover{color:#454545;}
	

/* #Buttons
==================================================*/

/* #Sun Flower Button
==================================================*/
.sun-flower-button {
  position: relative;
  vertical-align:top;
  width: 100%;
  height: 60px;
  padding: 0;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #f1c40f;
  border: 0;
  border-bottom: 2px solid #e2b607;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -2px #e2b607;
  box-shadow: inset 0 -2px #e2b607;
  margin-left:300px;
  }
.sun-flower-button:active {
  top: 1px;
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}








/* Table of Contents
==================================================
    #Base 960 Grid
    #Tablet (Portrait)
    #Mobile (Portrait)
    #Mobile (Landscape)
    #Clearing */



/* #Base 960 Grid
================================================== */

    .container                                  { position: relative; width: 960px; margin: 0 auto; padding: 0; }
    .container .column,
    .container .columns                         { float: left; display: inline; margin-left: 10px; margin-right: 10px; }
    .row                                        { margin-bottom: 20px; }

    /* Nested Column Classes */
    .column.alpha, .columns.alpha               { margin-left: 0; }
    .column.omega, .columns.omega               { margin-right: 0; }

    /* Base Grid */
    .container .one.column,
    .container .one.columns                     { width: 40px;  }
    .container .two.columns                     { width: 100px; }
    .container .three.columns                   { width: 160px; }
    .container .four.columns                    { width: 220px; }
    .container .five.columns                    { width: 280px; }
    .container .six.columns                     { width: 340px; }
    .container .seven.columns                   { width: 400px; }
    .container .eight.columns                   { width: 460px; }
    .container .nine.columns                    { width: 520px; }
    .container .ten.columns                     { width: 580px; }
    .container .eleven.columns                  { width: 640px; }
    .container .twelve.columns                  { width: 700px; }
    .container .thirteen.columns                { width: 760px; }
    .container .fourteen.columns                { width: 820px; }
    .container .fifteen.columns                 { width: 880px; }
    .container .sixteen.columns                 { width: 940px; }

    .container .one-third.column                { width: 300px; }
    .container .two-thirds.column               { width: 620px; }

    /* Offsets */
    .container .offset-by-one                   { padding-left: 60px;  }
    .container .offset-by-two                   { padding-left: 120px; }
    .container .offset-by-three                 { padding-left: 180px; }
    .container .offset-by-four                  { padding-left: 240px; }
    .container .offset-by-five                  { padding-left: 300px; }
    .container .offset-by-six                   { padding-left: 360px; }
    .container .offset-by-seven                 { padding-left: 420px; }
    .container .offset-by-eight                 { padding-left: 480px; }
    .container .offset-by-nine                  { padding-left: 540px; }
    .container .offset-by-ten                   { padding-left: 600px; }
    .container .offset-by-eleven                { padding-left: 660px; }
    .container .offset-by-twelve                { padding-left: 720px; }
    .container .offset-by-thirteen              { padding-left: 780px; }
    .container .offset-by-fourteen              { padding-left: 840px; }
    .container .offset-by-fifteen               { padding-left: 900px; }



/* #Tablet (Portrait)
================================================== */

    /* Note: Design for a width of 768px */

    @media only screen and (min-width: 768px) and (max-width: 959px) {
        .container                                  { width: 768px; }
        .container .column,
        .container .columns                         { margin-left: 10px; margin-right: 10px;  }
        .column.alpha, .columns.alpha               { margin-left: 0; margin-right: 10px; }
        .column.omega, .columns.omega               { margin-right: 0; margin-left: 10px; }
        .alpha.omega                                { margin-left: 0; margin-right: 0; }

        .container .one.column,
        .container .one.columns                     { width: 28px; }
        .container .two.columns                     { width: 76px; }
        .container .three.columns                   { width: 124px; }
        .container .four.columns                    { width: 172px; }
        .container .five.columns                    { width: 220px; }
        .container .six.columns                     { width: 268px; }
        .container .seven.columns                   { width: 316px; }
        .container .eight.columns                   { width: 364px; }
        .container .nine.columns                    { width: 412px; }
        .container .ten.columns                     { width: 460px; }
        .container .eleven.columns                  { width: 508px; }
        .container .twelve.columns                  { width: 556px; }
        .container .thirteen.columns                { width: 604px; }
        .container .fourteen.columns                { width: 652px; }
        .container .fifteen.columns                 { width: 700px; }
        .container .sixteen.columns                 { width: 748px; }

        .container .one-third.column                { width: 236px; }
        .container .two-thirds.column               { width: 492px; }

        /* Offsets */
        .container .offset-by-one                   { padding-left: 48px; }
        .container .offset-by-two                   { padding-left: 96px; }
        .container .offset-by-three                 { padding-left: 144px; }
        .container .offset-by-four                  { padding-left: 192px; }
        .container .offset-by-five                  { padding-left: 240px; }
        .container .offset-by-six                   { padding-left: 288px; }
        .container .offset-by-seven                 { padding-left: 336px; }
        .container .offset-by-eight                 { padding-left: 384px; }
        .container .offset-by-nine                  { padding-left: 432px; }
        .container .offset-by-ten                   { padding-left: 480px; }
        .container .offset-by-eleven                { padding-left: 528px; }
        .container .offset-by-twelve                { padding-left: 576px; }
        .container .offset-by-thirteen              { padding-left: 624px; }
        .container .offset-by-fourteen              { padding-left: 672px; }
        .container .offset-by-fifteen               { padding-left: 720px; }
    }


/*  #Mobile (Portrait)
================================================== */

    /* Note: Design for a width of 320px */

    @media only screen and (max-width: 767px) {
        .container { width: 300px; }
        .container .columns,
        .container .column { margin: 0; }

        .container .one.column,
        .container .one.columns,
        .container .two.columns,
        .container .three.columns,
        .container .four.columns,
        .container .five.columns,
        .container .six.columns,
        .container .seven.columns,
        .container .eight.columns,
        .container .nine.columns,
        .container .ten.columns,
        .container .eleven.columns,
        .container .twelve.columns,
        .container .thirteen.columns,
        .container .fourteen.columns,
        .container .fifteen.columns,
        .container .sixteen.columns,
        .container .one-third.column,
        .container .two-thirds.column  { width: 300px; }

        /* Offsets */
        .container .offset-by-one,
        .container .offset-by-two,
        .container .offset-by-three,
        .container .offset-by-four,
        .container .offset-by-five,
        .container .offset-by-six,
        .container .offset-by-seven,
        .container .offset-by-eight,
        .container .offset-by-nine,
        .container .offset-by-ten,
        .container .offset-by-eleven,
        .container .offset-by-twelve,
        .container .offset-by-thirteen,
        .container .offset-by-fourteen,
        .container .offset-by-fifteen { padding-left: 0; }

    }


/* #Mobile (Landscape)
================================================== */

    /* Note: Design for a width of 480px */

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .container { width: 420px; }
        .container .columns,
        .container .column { margin: 0; }

        .container .one.column,
        .container .one.columns,
        .container .two.columns,
        .container .three.columns,
        .container .four.columns,
        .container .five.columns,
        .container .six.columns,
        .container .seven.columns,
        .container .eight.columns,
        .container .nine.columns,
        .container .ten.columns,
        .container .eleven.columns,
        .container .twelve.columns,
        .container .thirteen.columns,
        .container .fourteen.columns,
        .container .fifteen.columns,
        .container .sixteen.columns,
        .container .one-third.column,
        .container .two-thirds.column { width: 420px; }
    }


/* #Clearing
================================================== */

    /* Self Clearing Goodness */
    .container:after { content: "\0020"; display: block; height: 0; clear: both; visibility: hidden; }

    /* Use clearfix class on parent to clear nested columns,
    or wrap each row of columns in a <div class="row"> */
    .clearfix:before,
    .clearfix:after,
    .row:before,
    .row:after {
      content: '\0020';
      display: block;
      overflow: hidden;
      visibility: hidden;
      width: 0;
      height: 0; }
    .row:after,
    .clearfix:after {
      clear: both; }
    .row,
    .clearfix {
      zoom: 1; }

    /* You can also use a <br class="clear" /> to clear columns */
    .clear {
      clear: both;
      display: block;
      overflow: hidden;
      visibility: hidden;
      width: 0;
      height: 0;
    }
/* Taking font for text in buttons */
@import url(http://fonts.googleapis.com/css?family=Oswald);

/* Link styles */
a, a:visited, a:hover {
  color: #e74c3c;
  text-decoration: none;
}

a:hover {
  color: #a05772;
}

/* Styles for buttons container */
.container1 {
	
	margin: 0 0 0 0;

	clear:both;
	
	}

/* Facebook */
.fb-icon-bg {
	background: #354f88;
	height: 50px;
	margin: 0 0 -50px 0;
	width: 41px; 
	float:left;
	margin-left:525px;

}

.fb-icon-bg:after {
  content: url(https://dl.dropboxusercontent.com/u/54149043/CssDeck/fb-icon.png);
  display: block;
  padding: 9px 10px 5px 15px;
 
}

.fb-bg {
	background: #3b5998;
	display: block;
	height: 50px;
	margin: 0 10 30px 21px;
	width: 220px; 
	padding-right:10px;
	}

.fb-bg:after {
	color: #fff;
	content: "LOGIN WITH FACEBOOK";
	font-family: 'Oswald', sans-serif;
	height: 37px;
	left: 8%;
	position: relative;
	text-transform: uppercase;
	top: 22%;
	width: 41px; 

	}

.fb-bg:hover{
  cursor: pointer;
}

.fb-bg:active{
  background: #354f88;
}

.button_example{
border:4px solid #26759E;-webkit-box-shadow: #878787 0px 2px 2px ;-moz-box-shadow: #878787 0px 2px 2px ; box-shadow: #878787 0px 2px 2px ; -webkit-border-radius: 23px; -moz-border-radius: 23px;border-radius: 23px;font-size:13px;font-family:arial, helvetica, sans-serif; padding: 10px 20px 10px 20px; text-decoration:none; display:inline-block;text-shadow: 2px 2px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #3093C7; background-image: -webkit-gradient(linear, left top, left bottom, from(#3093C7), to(#1C5A85));
 background-image: -webkit-linear-gradient(top, #3093C7, #1C5A85);
 background-image: -moz-linear-gradient(top, #3093C7, #1C5A85);
 background-image: -ms-linear-gradient(top, #3093C7, #1C5A85);
 background-image: -o-linear-gradient(top, #3093C7, #1C5A85);
 background-image: linear-gradient(to bottom, #3093C7, #1C5A85);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#3093C7, endColorstr=#1C5A85);
}

.button_example:hover{
 border:4px solid #26759E;
 background-color: #26759E; background-image: -webkit-gradient(linear, left top, left bottom, from(#26759E), to(#133D5B));
 background-image: -webkit-linear-gradient(top, #26759E, #133D5B);
 background-image: -moz-linear-gradient(top, #26759E, #133D5B);
 background-image: -ms-linear-gradient(top, #26759E, #133D5B);
 background-image: -o-linear-gradient(top, #26759E, #133D5B);
 background-image: linear-gradient(to bottom, #26759E, #133D5B);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#26759E, endColorstr=#133D5B);
}
</style>
	</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">
			Welcome to WHO'S HOT
			<p>Our terms and condition</p>
			</h1>
					<hr />
		</div>
		
		<div class="sixteen columns">
			<h4 class="remove-bottom" style="margin-top: 40px">
			PLEASE READ THESE TERMS OF USE AGREEMENT CAREFULLY. BY ACCESSING OR USING OUR SITE AND OUR SERVICES, YOU AGREE TO BE BOUND BY THESE TERMS AND ALL TERMS INCORPORATED BY REFERENCE. IF YOU DO NOT AGREE TO ALL OF THESE TERMS, DO NOT ACCESS OR USE OUR SITE OR OUR SERVICES.<br/>
			</h4>
			</div>
			<h3>
			1. This website is just for fun,so we request all of our user not to take this personally..<br/>
			2.This website will access your personal information from your facebook account...<br/>
			3.All of the personal pics of our contestants are only restricted for voting....<br/>
		4.Any resemblance of names in our website with any human being is merely a coincidence...<br/>
			5.If unknowingly we hurt anyone's sentiment,then we are really very very sorry...<br/>	
	</div><!-- container -->

<a class="button_example" href="<?=$loginUrl?>">I Agree</a>

<!-- End Document
================================================== -->
</body>
</html>