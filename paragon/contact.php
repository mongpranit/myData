<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact PATTAYA-PARAGON.COM</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript"  src="js/jquery-ui.min.js"></script>

<!-------This is Code for color box-------------------------------------->
<link media="screen" rel="stylesheet" href="colorbox/colorbox.css" />
<script src="colorbox/jquery.min.js"></script>
<script src="colorbox/jquery.colorbox.js"></script>
<!-------End Code for color box-------------------------------------->

<script type="text/javascript">
	$(document).ready(function(){
		$("a[rel='colorbox1']").colorbox();			//Color Box
		
		$("#arrival, #departure").datepicker({
			showOn: "button",
		    buttonImage: "images/icon/calendar.gif",
		    buttonImageOnly: true
		});					   
	});
</script>
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
        	<div id="c1">
            	<div class="topic">
            		<img src="images/wording/send_us_message.png"/>
                </div>
                <div style="color: #444;padding: 2px 2px; margin:8px 0px;-webkit-border-radius: 8px;-moz-border-radius: 8px; border-radius: 8px;">
                	<p style="line-height: 20px;">
                    	if you have problems with your reservation or want to make a general enquiry, please fill the form below and we will respond within 24-hours. if you require immediate assistance, please call the appropriate telephone number on the left.
                    </p>
                    <br />
                    Please complete all required(*)fields.
                    <table style="background:transparent;">
                    	<tr>
                        	<td>Name*</td>
                            <td><input type="text" name="name"/></td>
                        </tr>
                        <tr>
                        	<td>Email*</td>
                            <td><input type="text" name="email"/></td>
                        </tr>
                        <tr>
                        	<td>Phone Number</td>
                            <td><input type="text" name="phone"/></td>
                        </tr>
                        <tr>
                        	<td>Message</td>
                            <td><textarea name="sms" style="height:80px; width: 300px;"></textarea></td>
                        </tr>
                        <tr>
                        	<td>Security Code</td>
                            <td>
                            	<iframe name="a"src="captcha.php?width=100&height=40&characters=5" alt="captcha" frameborder="0" width="120" height="50" scrolling="no"></iframe>
<a href="captcha.php?width=100&height=40&characters=5" target="a"><img src="images/refresh.gif" width="13" height="13"  border="0" /></a>
                            </td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td>
                            <td><input type="text" name="secc"/></td>
                        </tr>
                        <tr>
                        	<td>&nbsp;</td>
                            <td><input type="submit" value="SUBMIT" /></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="c2" style="">
            	<h1>Map: </h1> 
                <a href="images/map.jpg" rel="colorbox1" title="">
                	<img src="images/map.jpg" style="width:100%;"/>
                </a>

                	<p style="line-height:8px;padding: 8px;font-size: 11px;">Tel: 66-(0)38-427-666</p>	
                	<p style="line-height:8px;padding: 8px;font-size: 11px;">Fax: 66-(0)38-416-722</p>

                	<p style="line-height:18px;padding: 8px;font-size: 11px;">E-mail :<br /> rsvn@pattaya-paragon.com<br />gm@pattaya-paragon.com</p>
                	<p style="line-height:18px;padding: 8px;font-size: 11px;">Website : www.pattaya-paragon.com</p>
                   
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

