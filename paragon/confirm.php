<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirm booking PATTAYA-PARAGON.COM</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript"  src="js/jquery-ui.min.js"></script>
<script type="text/javascript"  src="js/jquery.validationEngine.js"></script>
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
	<div id="container">
    	<div id="header">
        	<div id="logo"><img src="images/logo.png" /></div>
            <div id="nav">
            	<ul>
                	<li class="active"><a href="index.php"><img src="images/menu/home.png" /></a></li>
                    <li><a href="accommodation.php"><img src="images/menu/accommodation.png" /></a></li>
                    <li><a href="facilities.php"><img src="images/menu/facilities.png" /></a></li>
                    <li><a href="rate.php"><img src="images/menu/rate.png" /></a></li>
                    <li><a href="promotion.php"><img src="images/menu/promotion.png" /></a></li>
                    <li><a href="contact.php"><img src="images/menu/contact.png" /></a></li>
                </ul>
            </div>
        </div>
        
        <div id="slidex">
        	<?=include'slide.php';?>
        </div>
        
        <div id="content" style="margin-top: 40px;background:#FFF;-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;">
        	<div id="c1" style="width:100%; height:100px; text-align:center; padding:110px 0;">
 				<?
				
					if($_GET['res']=='true'){
						$flase = 'Confirm booking Thank you.';	
					}else{
						$flase = 'please, first new booking!';	
					}
                	echo "<h1>".$flase."</h1>";	
				?>
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