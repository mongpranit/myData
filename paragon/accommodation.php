<?php
$arrive=$_REQUEST['arrival'];
$depart=$_REQUEST['departure'];
$noOfroom=$_REQUEST['noofroom'];

//echo "$arrive,$depart,$noOfroom";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Accommodation PATTAYA-PARAGON.COM</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript"  src="js/jquery-ui.min.js"></script>
<script type="text/javascript"  src="js/application.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#arrival, #departure").datepicker({
			showOn: "button",
		    buttonImage: "images/icon/calendar.gif",
		    buttonImageOnly: true
		});	
		$(".c1-colunm-accommodation .list-type li").click(function(){
			$(".c1-colunm-accommodation .list-type li").removeClass("active");
			$(this).addClass("active");														   
		});
	});
	
	function bookNow(roomType, rate){
		window.location.assign("bookingInformation.php");	
	}
	
	function superior_new_wing(){
		var myUrl="superior_new_wing.php";
		$.ajax({
			 type: "POST",
			 url: myUrl,
			 beforeSend : function(){ loading('show',''); },
			 success: function(data){
				$('#room-spec').html(data);	 
				$('#room-spec').slideDown("slow");
				loading('hide','');
			 }
		   });	
	}
	function superior_classic_wing(){
		var myUrl="superior_classic_wing.php";
		$.ajax({
			 type: "POST",
			 url: myUrl,
			 beforeSend : function(){ loading('show',''); },
			 success: function(data){
				$('#room-spec').html(data);	 
				$('#room-spec').slideDown("slow");
				loading('hide','');
			 }
		   });	
	}
	function deluxe_pool_view(){
		var myUrl="deluxe_pool_view.php";
		$.ajax({
			 type: "POST",
			 url: myUrl,
			 beforeSend : function(){ loading('show',''); },
			 success: function(data){
				$('#room-spec').html(data);	 
				$('#room-spec').slideDown("slow");
				loading('hide','');
			 }
		   });	
	}
	function junior_suite(){
		var myUrl="junior_suite.php";
		$.ajax({
			 type: "POST",
			 url: myUrl,
			 beforeSend : function(){ loading('show',''); },
			 success: function(data){
				$('#room-spec').html(data);	 
				$('#room-spec').slideDown("slow");
				loading('hide','');
			 }
		   });	
	}
	function deluxe_city_view(){
		var myUrl="deluxe_city_view.php";
		$.ajax({
			 type: "POST",
			 url: myUrl,
			 beforeSend : function(){ loading('show',''); },
			 success: function(data){
				$('#room-spec').html(data);	
				$('#room-spec').slideDown("slow");
				loading('hide','');
			 }
		   });	
	}
	function paragon_suite(){
		var myUrl="paragon_suite.php";
		$.ajax({
			 type: "POST",
			 url: myUrl,
			 beforeSend : function(){ loading('show',''); },
			 success: function(data){
				$('#room-spec').html(data);	
				$('#room-spec').slideDown("slow");
				loading('hide','');
			 }
		   });	
	}
	function duplex_suite(){
		var myUrl="duplex_suite.php";
		$.ajax({
			 type: "POST",
			 url: myUrl,
			 beforeSend : function(){ loading('show',''); },
			 success: function(data){
				$('#room-spec').html(data);	 
				$('#room-spec').slideDown("slow");
				loading('hide','');
			 }
		   });	
	}
</script>

<!-------This is Code for color box-------------------------------------->
<link media="screen" rel="stylesheet" href="colorbox/colorbox.css" />
<script src="colorbox/jquery.min.js"></script>
<script src="colorbox/jquery.colorbox.js"></script>
<!-------End Code for color box-------------------------------------->


<!-----CSS For IE ------------------------------->
<!--[if IE]>
    <style>
    	.indexCn {
			height: 450px;
			overflow: auto;
		}
        #nav{
        	position:relative;
        	clear:both;
        }
        #slide{
        	clear:both;
            background:#ffffff;
            padding:2px;
            margin:10px 0 0 0;
        }
    </style>
<![endif]-->
</head>

<body>
	<div id="container">
    	<div id="header">
        	<div id="logo"><img src="images/logo.png"/></div>
            <div id="nav">
            	<?php include("nav.php") ?>
            	<!--<ul>
                	<li class="active"><a href="index.php"><img src="images/menu/home.png" /></a></li>
                    <li><a href="accommodation.php"><img src="images/menu/accommodation.png" /></a></li>
                    <li><a href="facilities.php"><img src="images/menu/facilities.png" /></a></li>
                    <li><a href="rate.php"><img src="images/menu/rate.png" /></a></li>
                    <li><a href="promotion.php"><img src="images/menu/promotion.png" /></a></li>
                    <li><a href="contact.php"><img src="images/menu/contact.png" /></a></li>
                </ul>-->
            </div>
        </div>
        
        <div id="slide">
        	<?php include('flashslide_inc.php'); ?>
        </div>
        
        <div id="content">
        	<div id="c1" style="width:100%;">
            	<div class="topic" style="margin-bottom:4px;">
            		<img src="images/wording/accommodation.png"/><br />
                </div>
                <div class="c1-colunm-accommodation" style="margin-left: -7px;">
                    <div class="list-type" style="width:185px; display:inline-block;">
                    	<ul class="room-type">
                            <li class="active" onclick="superior_new_wing();">Superior New Wing</li>
                            <li onclick="superior_classic_wing();">Superior Classic Wing</li>
                            <li onclick="deluxe_pool_view();">Deluxe Pool View</li>
                            <li onclick="deluxe_city_view();">Deluxe City View</li>
                            <li onclick="duplex_suite();">Grand Deluxe</li>
                            <li onclick="paragon_suite();">Paragon Suite</li>	
                        </ul>	
                    </div>
                    <div id="room-spec" style="width: 677px; overflow: auto;
                                            display: inline-block;
                                            vertical-align: top;
                                            height: 420px;-webkit-border-radius: 8px;
                                            -moz-border-radius: 8px;
                                            border-radius: 8px;">
                        <? require_once "superior_new_wing.php";?>
                   </div>
                </div>   
            </div>	
       </div>	
    </div>
    
    <div id="footer">
        PARAGON  PLACE<br />
        8/161 North Pattaya Soi 1, North Pattaya Road, Naklua, Banglamung, Chon Buri 20150, Thailand
        Tel: 66-(0)38-427-666 , Fax: 66-(0)38-416-722<br />
        Copyright 2013. E-mail: rsvn@pattaya-paragon.com
    </div>  
        
</body>
</html>