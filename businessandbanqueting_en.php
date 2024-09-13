<!DOCTYPE html>

<html>
<head>
<title>:: IPTV Home Screen ::</title>
<meta charset="utf-8">
<link href="css/style-fast_anim.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="js/dynamic.js"></script>
<?php 
	if(empty($_GET["browser-version"])){
?>
		<script type="text/javascript" src="js/<?php echo $_GET["stb-type"] ?>/key_code.js"></script>
		<script type="text/javascript" src="js/<?php echo $_GET["stb-type"] ?>/key_event.js"></script>
<?php
	}
	else
	{
?>
		<script type="text/javascript" src="js/<?php echo $_GET["stb-type"]?>/key_code_<?php echo $_GET["browser-version"]?>.js"></script>
		<script type="text/javascript" src="js/<?php echo $_GET["stb-type"]?>/key_event.js"></script>
<?php
	}	
?>


<script type="text/javascript">
var defaultSelectedMenuId = "menu1";
</script>
<?php

    if(isset($_REQUEST["menu"]))
	{
		echo "<script>";		
		echo "defaultSelectedMenuId='".$_REQUEST["menu"]."'";
		echo "</script>";		
	}
?>
<script type="text/javascript" src="js/tv-menu-fast_anim.js"></script><script type="text/javascript">
	function callbackRCBack()
	{
		var backcontentType = $(".backurl").attr("content-type");
		if(backcontentType == "url"){
			var pg = $(".backurl").attr("single_click_url");
			window.parent.location.href = pg;
		}
	}
	</script>
<style>
body {
    background-image   : url(images/meetings-events_616.jpg);
	background-size    : cover;                    
	background-repeat  : no-repeat;
	background-position: center center;           
}

#abc{
        position:absolute;
        top:250px;
        left:250px;
        width:200px;
        height:100px;
        color:white;
        border:1px solid white;
}
</style>

</head>
<body onLoad="javascript:this.focus();">
<div id="dock-container">
  <div id="left_arrow" style="display:block;">
    <img  src="images/arrow_left.png" style="float:left;height:53px;width:49px"/>
  </div>
  <div id="dock">
    <div class="backurl" content-type="url" single_click_url="index_en.php?menu=menu5&stb-type=<?php echo $_GET["stb-type"] ?>&browser-version=<?php echo $_GET["browser-version"]?>"></div>
    <ul id="main_menu_ul" style="cursor:pointer;"></ul>
  </div>
  <div id="right_arrow" style="display:block;">
    <img  src="images/arrow_right.png" style="float:right;height:53px;width:49px"/>
  </div>
  <div class="base">
	<img alt="Base" src="itc-coimbatore-theme/images/menus/base.png">
  </div>
</div>
<!--Main Menu Section-->

<div class="pagebtm" style="width:100%; font-family:Verdana, Geneva, sans-serif; text-align:center; color:#FFF; font-size:20px; line-height:28px;background:#1b1b1b; padding:0; position:absolute; bottom:0; opacity:0.8">
<img src="images/horizontal_navigate.png" alt="navigate" style=" margin-left:5px; vertical-align:middle;"/> to navigate
<img src="images/ok.png" alt="HOME" style="vertical-align:middle; margin-right:2px; margin-left:15px;"  /> to select
<!--span style="color:#ffb65e; font-weight:bold; font-size:22px; vertical-align:middle;display:inline-block; margin-top:0px;">MENU</span--> 
<img src="images/home.png" alt="HOME" style="vertical-align:middle; margin-right:2px; margin-left:15px;"  /> to main menu
<!--<img src="images/tv.png" alt="TV" style="vertical-align:middle; margin-right:2px; margin-left:15px;"  /> to watch TV -->
<img src="images/navigate2.png" alt="Back" style="vertical-align:middle; margin-right:2px; margin-left:15px;"/> to return
</div>
</body>
</html>