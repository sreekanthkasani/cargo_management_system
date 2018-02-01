<?php
//session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>home</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easySlider1.5.js"></script>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function(){	
	$("#slider").easySlider({
		controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',
		auto: true, 
		continuous: true
	});	
});
// ]]>
</script>
<style type="text/css">
#slider { margin:0; padding:0; list-style:none; }
#slider ul,
#slider li { margin:0; padding:0; list-style:none; }
/* 
    define width and height of list item (slide)
    entire slider area will adjust according to the parameters provided here
*/
#slider li { width:964px; height:231px; overflow:hidden; }
p#controls { margin:0; position:relative; }
#prevBtn,
#nextBtn { display:block; margin:0; overflow:hidden; width:84px; height:28px; position:absolute; left:758px; top:-36px; }
#nextBtn { left:842px; }
#prevBtn a { display:block; width:84px; height:28px; background:url(images/spacer.gif) no-repeat 0 0; }
#nextBtn a { display:block; width:84px; height:28px; background:url(images/spacer.gif) no-repeat 0 0; }
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="logo"><a href="index.php"><img src="images/aspinwallogo.jpg" width="288" height="55" border="0" alt="logo" /></a></div>
    <div class="search">
      <form id="form_search" name="form_search" method="post" action="">
        <label> <span>
          <input name="search_q" type="text" class="text" id="search_q" value="search" />
          </span>
          <input type="image" name="search_b" id="search_b" src="images/search_but.gif" class="button" />
        </label>
      </form>
    </div>
    <div class="menu">
      <ul>
        <li><a href="index.php" class="active"><span>Home</span></a></li>
        <li><a href="services.php"><span>Services</span></a></li>
        <li><a href="project.php"><span>Project</span></a></li>
        <li><a href="services.php"><span>About us</span></a></li>
        <li><a href="contacts.php"><span>Contact Us</span></a></li>
      </ul>
    </div>
    <div class="clr"></div>
  </div>