<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rate PATTAYA-PARAGON.COM</title>
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
		
		$("#highSeason").click(function(){
			var myUrl="include/high_season.php";
			$.ajax({
				 type: "POST",
				 url: myUrl,
				 beforeSend : function(){ loading('show',''); },
				 success: function(data){
					$('#roomRate').html(data);	 
					$('#roomRate').slideDown("slow");
					loading('hide','');
				 }
			   });									
		});
		
		$("#lowSeason").click(function(){
			var myUrl="include/low_season.php";
			$.ajax({
				 type: "POST",
				 url: myUrl,
				 beforeSend : function(){ loading('show',''); },
				 success: function(data){
					$('#roomRate').html(data);	 
					$('#roomRate').slideDown("slow");
					loading('hide','');
				 }
			   });									
		});
		
		$("#termsConditions").click(function(){
			var myUrl="include/terms_conditions.php";
			$.ajax({
				 type: "POST",
				 url: myUrl,
				 beforeSend : function(){ loading('show',''); },
				 success: function(data){
					$('#roomRate').html(data);	 
					$('#roomRate').slideDown("slow");
					loading('hide','');
				 }
			   });									
		});
	});
</script>
<style>
	#roomRateCn{ 
			margin:20px 2px 10px 10px;
			max-height: 400px;
			overflow-x:auto;
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
            		<img src="images/wording/rate.png"/>
                </div>
                <!--
                <div id="highSeason">
                	HIGH SEASON
                </div>
                
                <div id="lowSeason">
                	LOW SEASON
                </div>
                
                <div id="termsConditions">
                	Terms & Conditions
                </div>
                -->
                <div id="roomRateCn">
                	<h1>HIGH SEASON | 1 Nov,2013 – 30 Apr,2014</h1>	
                    <table width="200" border="0">
					  <tr>
					    <th class="th01" scope="row">Room Type</th>
					    <th class="th01" scope="row">Daily Rate</th>
					    <th class="th01" scope="row">Weekly Rate</th>
					    <th class="th01" scope="row">Monthly Rate</th>
				      </tr>
					  <tr>
					    <th class="th02" colspan="4" scope="row">New Wing</th>
				      </tr>
					  <tr>
					    <td class="td1"  scope="row">Superior Room</td>
					    <td class="td1"  scope="row">1,700</td>
					    <td class="td1"  scope="row">-</td>
					    <td class="td1"  scope="row">-</td>
				      </tr>
					  <tr>
					    <td class="td1"  scope="row">Deluxe Pool View</td>
					    <td class="td1"  scope="row">2,200</td>
					    <td class="td1"  scope="row">-</td>
					    <td class="td1"  scope="row">-</td>
				      </tr>
					  <tr>
					    <td class="td1"  scope="row">Suite</td>
					    <td class="td1"  scope="row">3,500</td>
					    <td class="td1"  scope="row">-</td>
					    <td class="td1"  scope="row">-</td>
				      </tr>
					  <tr>
					    <th class="th02" colspan="4" scope="row">Classic Wing</th>
				      </tr>
					  <tr>
					    <td class="td1"  scope="row">Superior Room</td>
					    <td class="td1"  scope="row">1,700</td>
					    <td class="td1"  scope="row">7,500</td>
					    <td class="td1"  scope="row">16,000</td>
				      </tr>
					  <tr>
					    <td class="td1"  scope="row">Deluxe City View</td>
					    <td class="td1"  scope="row">2,000</td>
					    <td class="td1"  scope="row">9,500</td>
					    <td class="td1"  scope="row">18,000</td>
				      </tr>
					  <tr>
					    <td class="td1"  scope="row">Deluxe Pool View</td>
					    <td class="td1"  scope="row">2,200</td>
					    <td class="td1"  scope="row">10,000</td>
					    <td class="td1"  scope="row">22,000</td>
				      </tr>
					  <tr>
					    <td class="td1"  scope="row">Grand Deluxe</td>
					    <td class="td1"  scope="row">2,800</td>
					    <td class="td1"  scope="row">12,000</td>
					    <td class="td1"  scope="row">26,000</td>
				      </tr>
					  <tr>
					    <td class="td1"  scope="row">Suite</td>
					    <td class="td1"  scope="row">3,500</td>
					    <td class="td1"  scope="row">15,000</td>
					    <td class="td1"  scope="row">30,000</td>
				      </tr>
					  <tr>
					    <td class="td1"  scope="row">Extra Bed</td>
					    <td class="td1"  scope="row">500</td>
					    <td class="td1"  scope="row">-</td>
					    <td class="td1"  scope="row">-</td>
				      </tr>
                  </table>

                  <h1>Surchare Applicable Between</h1>
                  <p style="line-height:18px;">
                      <label style="width:150px;">Peak Season</label>: 20 Dec, 2013 - 10 Jan, 2014 @400 Baht per room per night<br />
                      <label style="width:150px;">Chinese New Year</label>: 10 Feb, 2014 - 19 Feb, 2014 @400 Baht per room per night<br />
                      <label style="width:150px;">Songkran Festivals</label>: 13 Apr, 2014 - 15 Apr, 2014 @400 Baht per room per night
                  </p>	 
                  
                  <h1>LOW SEASON | 01 May, 2014 - 31 Oct, 2014</h1>
                    <table width="200" border="0">
                      <tr>
                        <th class="th01" scope="row">Room Type</th>
                        <th class="th01" scope="row">Daily Rate</th>
                        <th class="th01" scope="row">Weekly Rate</th>
                        <th class="th01" scope="row">Monthly Rate</th>
                      </tr>
                      <tr>
                        <th class="th02" colspan="4" scope="row">New Wing</th>
                      </tr>
                      <tr>
                        <td class="td1"  scope="row">Superior Room</td>
                        <td class="td1"  scope="row">1,600</td>
                        <td class="td1"  scope="row">-</td>
                        <td class="td1"  scope="row">-</td>
                      </tr>
                      <tr>
                        <td class="td1"  scope="row">Deluxe Pool View</td>
                        <td class="td1"  scope="row">2,000</td>
                        <td class="td1"  scope="row">-</td>
                        <td class="td1"  scope="row">-</td>
                      </tr>
                      <tr>
                        <td class="td1"  scope="row">Suite</td>
                        <td class="td1"  scope="row">3,200</td>
                        <td class="td1"  scope="row">-</td>
                        <td class="td1"  scope="row">-</td>
                      </tr>
                      <tr>
                        <th class="th02" colspan="4" scope="row">Classic Wing</th>
                      </tr>
                      <tr>
                        <td class="td1"  scope="row">Superior Room</td>
                        <td class="td1"  scope="row">1,600</td>
                        <td class="td1"  scope="row">6,500</td>
                        <td class="td1"  scope="row">14,000</td>
                      </tr>
                      <tr>
                        <td class="td1"  scope="row">Deluxe City View</td>
                        <td class="td1"  scope="row">1,800</td>
                        <td class="td1"  scope="row">8,500</td>
                        <td class="td1"  scope="row">16,000</td>
                      </tr>
                      <tr>
                        <td class="td1"  scope="row">Deluxe Pool View</td>
                        <td class="td1"  scope="row">2,000</td>
                        <td class="td1"  scope="row">9,000</td>
                        <td class="td1"  scope="row">18,000</td>
                      </tr>
                      <tr>
                        <td class="td1"  scope="row">Grand Deluxe</td>
                        <td class="td1"  scope="row">2,500</td>
                        <td class="td1"  scope="row">10,000</td>
                        <td class="td1"  scope="row">22,000</td>
                      </tr>
                      <tr>
                        <td class="td1"  scope="row">Suite</td>
                        <td class="td1"  scope="row">3,000</td>
                        <td class="td1"  scope="row">12,000</td>
                        <td class="td1"  scope="row">25,000</td>
                      </tr>
                      <tr>
                        <td class="td1"  scope="row">Extra Bed</td>
                        <td class="td1"  scope="row">500</td>
                        <td class="td1"  scope="row">-</td>
                        <td class="td1"  scope="row">-</td>
                      </tr>
                    </table>
                    
                    
                    <h1>Terms & Conditions: </h1>
                    <ul class="arrow" style="line-height:20px;margin-left: 18px;">
                      <li> Rates are quoted in Thai Baht.</li>
                      <li> Rates are inclusive of all tax and service charge.</li>
                      <li> Credit cards accepted: Visa Card and Master Card</li>
                      <li> Rates listed are per room per night based on one or two persons sharing.</li>
                      <li> Weekly rates can only apply when guests stay at least 7 nights.</li>
                      <li> Monthly rates can only apply when guests stay at least 30 nights.</li>
                      <li> The room's rate is including breakfast.</li>
                      <li> There is no extra charge for children under the age of 12, sharing the same room with their </li>
                      <li> Check-in time at 14.00 hrs and check-out time at 12.00 noon.</li>
                      <li> Full payment is required for all bookings when check in </li>
                      <li> Cancellations for all periods, except Peak season, can be made at least 48 hours prior to guest's </li>
                      <li> Cancellations for Peak season, can be made at least 168 hours prior to guest's arrival date.</li>
                      <li> Rates and government tax are subject to change without notice.</li>
                      <li> No show case will carry a penalty fee of at least 1 night.</li>
                      <li> Non-refundable in case of late check-in and early check-out.</li>
                    </ul>

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