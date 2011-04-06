<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Multi-Fold Links Inc. Any Time, Any Place, Any Way, Non-Stop Computing</title>
	<meta name="generator" content="Studio 3 http://aptana.com/">
	<meta name="author" content="root">
	<!-- Date: 2011-01-04 -->

<<<<<<< HEAD
<link rel="shortcut icon" href="images/mfl.ico"/>
=======
>>>>>>> 3de0fd87913ccea94166b65245aca9ea7a94ecc7
<link rel="stylesheet" type="text/css" href="css/page.css">
<link rel="stylesheet" type="text/css" href="css/menubar.css">
<link rel="stylesheet" type="text/css" href="css/cycle.css">
<link rel="stylesheet" type="text/css" href="css/content.css">
<script type="text/javascript" src="js/clients.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.2.72.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.1.1.js"></script>
<script type="text/javascript" src="js/jmenu.js"></script>
<script type="text/javascript" src="js/japps.js"></script>
<style>
  #header {background: url('images/header1.png');}
  #header-background {background: url('images/headerline.png') repeat-x;}
  #menu-background {background: url('images/menuline.png') repeat-x; z-index: 9; position: relative;}
  #footer-background {background: url('images/footerline.png') repeat-x;}
</style>
<script type="text/javascript">
 $(document).ready(function(){
    $(window).mousemove(function(){
      //console.log($(document).width());
      if (parseInt($(window).width()) > 1024)
      {
        $("#header-background, #menu-background, #content-background, #footer-background").css('width','100%');
        console.log($(window).width());
      } 
      else
      {
        $("#header-background, #menu-background, #content-background, #footer-background").css('width','1200px');
        console.log($(window).width()); 
      }
    });
 });
</script>
	<?php
	$page = $_GET['p'];
	if(isset($page)){
		if($page == "websearch") { 

			include('pages/websearchsettings.inc.php');

		}

		else {

			echo " ";

		}	

	}
	include('pages/googleanalytics.inc.php');

	?>
</head>
<body>
  <div id="header-background">
    <div id="header">
    </div>
  </div>
  <div id="menu-background">
    <ul id="menu">
      <li class="list-menu"><a href="index.php">Home</a></li>
      <li id="drop"><a class="drop" href="#">Solutions and Services</a>
        <div class="dropdown">
<<<<<<< HEAD
              <div id="submenu"><a href="index.php?p=hsbu">iWare</a></div>
              <div id="submenu"><a href="index.php?p=ecbu">iBuild</a></div>
              <div id="submenu"><a href="index.php?p=adbu">iPackage</a></div>
              <div id="submenu"><a href="index.php?p=msbu">iSource</a></div>
              <div id="submenu"><a href="index.php?p=idbu">iDesign</a></div>
=======
              <div id="submenu"><a href="index.php?p=hsbu">iWare<br><br>Hardware and Software Business Unit</a><br></div>
              <div id="submenu"><a href="index.php?p=ecbu">iBuild<br><br>Engineering and Construction Business Unit</a><br></div>
              <div id="submenu"><a href="index.php?p=adbu">iPackage<br><br>Applications and Development Business Unit</a><br></div>
              <div id="submenu"><a href="index.php?p=msbu">iSource<br><br>Managed Services Business Unit</a><br></div>
              <div id="submenu"><a href="index.php?p=idbu">iDesign<br><br>Interior Design Business Unit</a><br></div>
>>>>>>> 3de0fd87913ccea94166b65245aca9ea7a94ecc7
        </div>
      </li>
      <li class="list-menu"><a href="index.php?p=clients">Clients</a></li>
      <li class="list-menu"><a href="index.php?p=news">News and Events</a></li>
      <li class="list-menu"><a href="index.php?p=corporateprofile">Corporate Profile</a></li>
      <li class="list-menu"><a href="index.php?p=download">Download</a></li>
      <li class="list-menu"><a href="index.php?p=contactus">Contact Us</a></li>
      <li>
      	<div id="search">
		<?
			include('pages/googlesearch.inc.php');
		?>
		</div></li>
    </ul>
  </div>
  <div id="content-background">
<?php 
  $path = "pages/".$page.".php";
  if (!file_exists($path)) { ?>
    <div id="banner">
      <div id='pictures' class = 'pics'>
<<<<<<< HEAD
      	<img class="jpg" id='jpg1' src="images/hourglass_main.png" width=720px height=300px />
      	<img class="jpg" id='jpg2' src="images/netcrunch_main.png" width=720px height=300px />
        <img class="jpg" id='jpg3' src="images/zyrion_main.png" width=720px height=300px />
        <img class="jpg" id='jpg4' src="images/dbm_main.png" width=720px height=300px />
=======
        <img class="jpg" id='jpg1' src="images/zyrion_main.gif" width=720px height=300px />
        <img class="jpg" id='jpg2' src="images/dbm_main.png" width=720px height=300px />
        <img class="jpg" id='jpg3' src="images/3.jpg" width=720px height=300px />
        <img class="jpg" id='jpg4' src="images/4.jpg" width=720px height=300px />
>>>>>>> 3de0fd87913ccea94166b65245aca9ea7a94ecc7
      </div>
    </div>
<?php } else { ?> 
    <div id="banner-image" align="center">
<?php switch($page) { case adbu: ?>
      <img class='banner' src='images/banner8.png'>
<?php break; case ecbu:?>
      <img class='banner' src='images/banner8.png'>
<?php break; case msbu:?>
      <img class='banner' src='images/banner8.png'>
<?php break; case hsbu:?>
      <img class='banner' src='images/banner8.png'>
<?php break; case idbu:?>
      <img class='banner' src='images/banner8.png'>
<?php break; case clients:?>
      <img class='banner' src='images/banner11.png'>
<?php break; case news:?>
      <img class='banner' src='images/banner10.png'>
<?php break; case corporateprofile:?>
      <img class='banner' src='images/banner6.png'>
<?php break; case download:?>
      <img class='banner' src='images/banner9.png'>
<?php break; case contactus:?>
      <img class='banner' src='images/banner7.png'>
<?php }; //end switch ?> 
    </div>
<?php }//end if statement 
  if (file_exists($path)) { include($path); } else { ""; }
?>    
  </div>
  <div id="footer-background">
    <div id="footer">
      <div id="left">
        Copyright 2010 Multi-Fold Links Inc. All right reserved.<br>
        Platinum 2000 Annapolis St. Greenhills, San Juan
      </div>
      <div id="center">
        <a class="footer" href="index.php?p=corporateprofile">about us</a> | <a class="footer" href="index.php?p=contactus">contact us</a> | <a class="footer" href="index.php?p=sitemap">sitemap</a><br><label>Optimized for:&nbsp;</label><a href="http://www.firefox.com"><img src="images/firefox.png"></a>&nbsp;<a href="http://www.google.com/chrome"><img src="images/chrome.png"></a>&nbsp;<a href="http://www.apple.com/safari/download/"><img src="images/safari.gif"></a><br><a class="footer" href="http://www.multifoldlinks.com">www.multifoldlinks.com</a>
      </div>
      <div id="right">
        Tel.: (632) 726-2637 | (632) 726-1440<br>
        Fax: (632) 726-6903
      </div>
    </div>
  </div>
</body>
</html>
