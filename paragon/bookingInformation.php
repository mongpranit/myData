<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking information</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript"  src="js/jquery-ui.min.js"></script>
<script type="text/javascript"  src="js/jquery.validationEngine.js"></script>
<script type="text/javascript"  src="js/jquery.validationEngine-en.js"></script>
<script type="text/javascript">
  //$.noConflict();
  jQuery(document).ready(function($) {
		$("#arrival").datepicker({
			showOn: "button",
		    buttonImage: "images/icon/calendar.gif",
		    buttonImageOnly: true,
			dateFormat: 'dd/mm/yy',
			minDate: new Date()
		});	
		
		$("#departure").datepicker({
			showOn: "button",
		    buttonImage: "images/icon/calendar.gif",
		    buttonImageOnly: true,
			dateFormat: 'dd/mm/yy',
			minDate: '+1d'
		});	
		
		$("#continue1").click(function(){
		 	var myUrl="booking.php";
			var room =  $("#room").val();
			var rate =  $("#rate").val();
			var arrival =  $("#arrival").val();
			var departure =  $("#departure").val();
			var adult =  $("#adult").val();
			var noofroom =  $("#noofroom").val();
			$.ajax({
			 type: "POST",
			 url: myUrl,
			 data: {room:room, rate:rate, arrival:arrival, departure:departure, adult:adult, noofroom:noofroom},
			 success: function(data){
				$('#guest-info').html(data);	 
				$('#guest-info').slideDown("slow");
			 }
		   });								  
		});	
		
		$("#ccv-number").dialog({
			autoOpen: false,
			modal: true,
			width: 700
		});
		
	});
  
  function showCCVhelp(){ 
  	$("#ccv-number").dialog('open');
  }
	
	
	
	
</script>
</head>

<body>
	<div id="ccv-number" title="What is the Card Security Code?">
    	<h1>What is the Card Security Code (CCV number)?</h1>
The Card Security Code (CCV) is the last three digits of the longer number printed on your debit/credit card. Most cards have the number printed at the top of the signature strip on the reverse side of the card.<br /><br />

This number is not imprinted on the card and hence not printed on receipts – which is what makes it difficult for anyone other than the cardholder to know it. Some card issuers refer to this number as the 'Card Security Code' others as the 'Personal Security Code' and others as 'Card Verification Value'.<br /><br />

American Express cards have a four-digit code printed on the front of the card above the card number. This code is often referred to as ‘CID’ or ‘unique card code’.<br /><br />
<img src="images/icon/ccv_number.jpg"/>
    </div>
    
	<div id="container">
    	<div id="header">
        	<div id="logo"><img src="images/logo.png" /></div>
            <div id="nav">
				<?php include("nav.php") ?>
            </div>
        </div>
        
        <div id="slidex">
        	<? //=include'slide.php';?>
        </div>
        
        <div id="content" style="background:#FFF;-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px; margin:20px 0;">
        	<div id="c1" style="width:100%;">
            	<div class="topic" style="margin-bottom:4px;">
            		<img src="images/wording/booking_a_room.png"/><br />
                </div>
                <div id="guest-info" class="c1-colunm-guest-info" style="background: #FFF;
                                                                    color:#444;
                                                                    -webkit-border-radius: 8px;
                                                                    -moz-border-radius: 8px;
                                                                    border-radius: 8px;
                                                                    padding: 12px 6px;">
                	<ul style="margin:14px 0;">
                    	<li style="display:inline-block;width:272px;font-weight:bold;">Room</li>
                        <li style="display:inline-block;width:100px;font-weight:bold;">Rate(THB)</li>
                        <li style="display:inline-block;width:130px;font-weight:bold;">Arrival</li>
                        <li style="display:inline-block;width:130px;font-weight:bold;">Departure</li>
                        <li style="display:inline-block;width:100px;font-weight:bold;">Adult(s)</li>
                        <li style="display:inline-block;width:100px;font-weight:bold;">No. of Room</li>
                    </ul>
                    
                  <ul>
                    	<li style="display:inline-block;width:272px;">
							<?=$_POST['room'];?>
                            <input type="hidden" name="room" id="room" value="<?=$_POST['room'];?>"/>
                        </li>
                        <li style="display:inline-block;width:100px;">
							<?=number_format($_POST['rate'],0);?>
                            <input type="hidden" name="rate" id="rate" value="<?=$_POST['rate'];?>"/>
                        </li>
                        <li style="display:inline-block;width:130px;">
                        <input name="arrival" id="arrival" style="width:82px;" value="<?=date('d')."/".date('m')."/".date('Y');?>"/></li>
                        <li style="display:inline-block;width:130px;">
                        <input name="departure" id="departure" style="width:82px;" value="<?=(date('d')+1)>=10? (date('d')+1)."/".date('m')."/".date('Y'):sprintf('%02d',(date('d')+1))."/".date('m')."/".date('Y');?>"/>
                        </li>
                        <li style="display:inline-block;width:100px;font-weight:bold;">
                        	<select name="adult" id="adult">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </li>
                        <li style="display:inline-block;width:100px;">
                        	<select name="noofroom" id="noofroom">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </li>
                    </ul>
                    
                    <div style="text-align:center; margin: 52px 0px 4px;">
                    	<img src="images/icon/ic-continue.png" id="continue1" style="cursor:pointer;"/>
                    	<!--<input type="submit" value="CONTINUE" class="continue"/>-->
                    </div>
                	
                   <!-- <div class="c1-colunm-accommodation">
                    	<? //=include $_POST['description'];?>
                    </div> -->
                 	   
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