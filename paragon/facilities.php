<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facilities &amp; Services  PATTAYA-PARAGON.COM</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript"  src="js/jquery-ui.min.js"></script>
<script type="text/javascript"  src="js/application.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("a[rel='colorbox1']").colorbox();			//Color Box
		$("#arrival, #departure").datepicker({
			showOn: "button",
		    buttonImage: "images/icon/calendar.gif",
		    buttonImageOnly: true
		});	
		
		$("#swimmingPoolNewWing").click(function(){
			var myUrl="include/swimming_pool_new_wing.php";
			$.ajax({
				 type: "POST",
				 url: myUrl,
				 beforeSend : function(){ loading('show',''); },
				 success: function(data){
					$('#facilities').html(data);	 
					$('#facilities').slideDown("slow");
					loading('hide','');
				 }
			   });									
		});
		
		$("#swimmingPoolClassisWing").click(function(){
			var myUrl="include/swimming_pool_classic_wing.php";
			$.ajax({
				 type: "POST",
				 url: myUrl,
				 beforeSend : function(){ loading('show',''); },
				 success: function(data){
					$('#facilities').html(data);	 
					$('#facilities').slideDown("slow");
					loading('hide','');
				 }
			   });									
		});
		
		$("#lobbyRelex").click(function(){
			var myUrl="include/lobby_relex.php";
			$.ajax({
				 type: "POST",
				 url: myUrl,
				 beforeSend : function(){ loading('show',''); },
				 success: function(data){
					$('#facilities').html(data);	 
					$('#facilities').slideDown("slow");
					loading('hide','');
				 }
			   });									
		});
	});
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
            	<div class="topic">
            		<img src="images/wording/facilities.png"/>
                </div>
                
                <!--<div id="swimmingPoolClassisWing">
                	Swimming Pool - Classis Wing
                </div>
                <div id="swimmingPoolNewWing">
                	Swimming Pool - New Wing
                </div>
                
                <div id="lobbyRelex">
                	Lobby & Relex
                </div> -->
                
                <div class="c1-colunm service" id="facilities" style="">
                	<h1>Swimming Pool - Classis Wing : Open 08.00am - 20.00pm.</h1>
                    <a href="images/facilities/4.jpg" rel="colorbox1" title="">
                    	<img src="images/facilities/4.jpg"/>
                     </a>   
                    <a href="images/facilities/6.jpg" rel="colorbox1" title="">
                   		 <img src="images/facilities/6.jpg"/>   
                    </a>
                    
                    <h1>Swimming Pool - New Wing : Open 08.00am - 20.00pm.</h1>
                    <a href="images/facilities/pool3.jpg" rel="colorbox1" title="">
                    	<img src="images/facilities/pool3.jpg"/>
                    </a>
                    <a href="images/facilities/n3.jpg" rel="colorbox1" title="">
                    	<img src="images/facilities/n3.jpg"/>
                    </a>
                    
                    <h1>Lobby & Relex</h1>
                    <a href="images/facilities/n4.jpg" rel="colorbox1" title="">
                    	<img src="images/facilities/n4.jpg"/>
                    </a>
                    <br /><br />
                    <ul class="arrow">
                        <li> 24 hour service for Reception</li>
                        <li> Maid service every others day</li>
                        <li> Restaurant & Room Service</li>
                        <li> Safety Deposit Box</li>
                        <li> Luggage Storage</li>
                        <li> High speed internet service (Optional)</li>
                        <li> Laundry Services</li>
                        <li> Homey lobby</li>
                        <li> Function room (capacity of 50 people)</li>
                        <li> Elevator</li>
                        <li> Car park</li>
                        <li> 24-hour security on guard with closed circuit monitors</li>
                        <li> Transport Services</li>
                    </ul>
                    <br />
                    <br />
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