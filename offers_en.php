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
    background-image   : url(images/offers_628.jpg);
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
    <div class="backurl" content-type="url" single_click_url="index_en.php?menu=menu6&stb-type=<?php echo $_GET["stb-type"] ?>&browser-version=<?php echo $_GET["browser-version"]?>"></div>
    <ul id="main_menu_ul" style="cursor:pointer;"><li id="1" select="true"><span>Room Is On Us</span>
        <div content-type="image" single_click_url="room-on-us_629.jpg" item="menu1"><img src="images/room-on-us_629_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="2" select="true"><span>City Getaways</span>
        <div content-type="image" single_click_url="city-getaways_630.jpg" item="menu2"><img src="images/city-getaways_630_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="3" select="true"><span>Rejuvenate And Recharge</span>
        <div content-type="image" single_click_url="rejuvenate-and-recharge_631.jpg" item="menu3"><img src="images/rejuvenate-and-recharge_631_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="4" select="true"><span>Short Break</span>
        <div content-type="image" single_click_url="short-break_632.jpg" item="menu4"><img src="images/short-break_632_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="5" select="true"><span>Senior Citizen Offer</span>
        <div content-type="image" single_click_url="senior-citizen-offer_633.jpg" item="menu5"><img src="images/senior-citizen-offer_633_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="6" select="true"><span>Suite Memories</span>
        <div content-type="image" single_click_url="suite-memories_634.jpg" item="menu6"><img src="images/suite-memories_634_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="7" select="true"><span>Workation</span>
        <div content-type="image" single_click_url="workation_635.jpg" item="menu7"><img src="images/workation_635_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="8" select="true"><span>Doctors Offer</span>
        <div content-type="image" single_click_url="doctorsoffer_636.jpg" item="menu8"><img src="images/doctorsoffer_636_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="9" select="true"><span>Armed forces Offer</span>
        <div content-type="image" single_click_url="armedforcesoffer_637.jpg" item="menu9"><img src="images/armedforcesoffer_637_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="10" select="true"><span>Suite Sojourns</span>
        <div content-type="image" single_click_url="suitesojourns_638.jpg" item="menu10"><img src="images/suitesojourns_638_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="11" select="true"><span>City Escapes</span>
        <div content-type="image" single_click_url="city-escapes_639.jpg" item="menu11"><img src="images/city-escapes_639_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="12" select="true"><span>Leisure Escapes</span>
        <div content-type="image" single_click_url="leisure-escapes_640.jpg" item="menu12"><img src="images/leisure-escapes_640_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="13" select="true"><span>Workation Escapes</span>
        <div content-type="image" single_click_url="workation-escapes_641.jpg" item="menu13"><img src="images/workation-escapes_641_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li><li id="14" select="true"><span>Gratitude Package For COVID Warriors</span>
        <div content-type="image" single_click_url="covid-warriors_642.jpg" item="menu14"><img src="images/covid-warriors_642_icon.png" /><p><img src="images/menu-cover.png" /></p></div>
      </li></ul>
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