<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Promotion PATTAYA-PARAGON.COM</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
<link rel="stylesheet" type="text/css" href="css/table_style.css"/>

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
		
		$("#tabs-room-only").click(function(){
			var myUrl="include/roomonly.php";
			$.ajax({
				 type: "POST",
				 url: myUrl,
				 beforeSend : function(){ loading('show',''); },
				 success: function(data){
					$('#view-promotion').html(data);	 
					$('#view-promotion').slideDown("slow");
					loading('hide','');
				 }
			   });									
		});
		
		$("#tabs-long-stay").click(function(){
			var myUrl="include/longstay.php";
			$.ajax({
				 type: "POST",
				 url: myUrl,
				 beforeSend : function(){ loading('show',''); },
				 success: function(data){
					$('#view-promotion').html(data);	 
					$('#view-promotion').slideDown("slow");
					loading('hide','');
				 }
			   });									
		});
		
		
		
	});
	
</script>


<style>
	#view-promotion{
		max-height: 390px; 
		background:#B1AB89; 
		overflow:hidden;
		-webkit-border-radius: 20px 0px 20px 0px;
		-moz-border-radius: 20px 0px 20px 0px;
		-o-border-radius: 20px 0px 20px 0px;
		-ms-border-radius: 20px 0px 20px 0px;
		border-radius: 20px 0px 20px 0px;
	}
	
	#promotionCn1{ 
		margin:20px 2px 10px 10px;
		max-height: 365px;
		overflow-x:auto;
	}
	#tabs-long-stay,#tabs-room-only{
		background:#726751;
	}
	#tabs-long-stay:hover,#tabs-room-only:hover{
		background:#333;
	}
	#col1{
		background:#F60;
	}
	
	.table01 {
		font-size: 12px;
		border-collapse: collapse;
	}	
</style>

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
            		<img src="images/wording/promotion.png"/>
                </div>
                <div style="margin-top:2px;text-align: right;">
                    <div id="tabs-long-stay">
                        LONG STAY PROMOTION
                    </div>
                    
                    <div id="tabs-room-only">
                        Room Only
                  </div>
              </div>
                
                <div class="c1-colunm" id="view-promotion">
                <div id="promotionCn1">
           	    <h1>LONG STAY PROMOTION</h1>
           	    <table width="100%" border="0" id="gradient-style" class="table01">
           	      <tr>
           	        <th class="th01" scope="col">Room Type</th>
           	        <th class="th01" scope="col">2 Monthly Rate</th>
           	        <th class="th01" scope="col">6 Monthly Rate</th>
           	        <th class="th01" scope="col">Yearly Rate</th>
       	          </tr>
           	      <tr>
           	        <td class="td1">Superior Room</td>
           	        <td class="td1" >13,000</td>
           	        <td class="td1"  scope="row">12,000</td>
           	        <td class="td1"  scope="row">10,000</td>
       	          </tr>
           	      <tr>
           	        <td class="td1"  scope="row">Deluxe City View</td>
           	        <td class="td1"  scope="row">15,000</td>
           	        <td class="td1"  scope="row">14,000</td>
           	        <td class="td1"  scope="row">12,000</td>
       	          </tr>
           	      <tr>
           	        <td class="td1"  scope="row">Deluxe Pool View</td>
           	        <td class="td1"  scope="row">17,000</td>
           	        <td class="td1"  scope="row">15,000</td>
           	        <td class="td1"  scope="row">13,000</td>
       	          </tr>
           	      <tr>
           	        <td class="td1"  scope="row">Grand Deluxe</td>
           	        <td class="td1"  scope="row">20,000</td>
           	        <td class="td1"  scope="row">18,000</td>
           	        <td class="td1"  scope="row">15,000</td>
       	          </tr>
         	      </table>
           	    <h1>Terms & Conditions:</h1>
                    <div style="color:#ffffff; padding:2px 25px; width:92%; margin-bottom: 32px;height:250px;">
                        <ul style="line-height:20px;margin-left: 18px;">
                            <li>Rates are quoted in Thai Baht (THB)</li>
                            <li>Rates are inclusive of all tax and service charge.</li>
                            <li>A credit card is required at check-in to guarantee payment of any incidental charges.</li>
                            <li>Photo ID may also be requested.</li>
                            <li>Security deposit in advance is required.</li>
                                <ul style="margin-left:64px;">
                                    <li>10,000 baht For tenancy less than 1 months</li>
                                    <li>10,000 Baht plus one month's rental For tenancy of 2-6 months</li>
                                    <li>20,000 Baht plus one month's rental For tenancy of 6 months or above</li>
                                </ul>
                            <li>The above rates are exclusive of electricity and water supply charges</li>
                               <ul style="margin-left:64px;">
                                    <li>350 baht per month for water supply charge</li>
                                    <li>6 bath per unit for electricity charge</li>   
                                </ul>
    
                            <li>Maid cleaning service 3 times a week </li>
                            <li>A change in the length of stay may result in a rate change.</li>
                            <li>Rates are subject to change without prior notice and may vary based on availability.</li>
                        </ul>
                    </div>
                    
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