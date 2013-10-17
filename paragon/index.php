<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PARAGON PLACE HOTEL IN PATTAYA</title>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript"  src="js/jquery-ui.min.js"></script>


<script type="text/javascript">
	//$.noConflict();
  	jQuery(document).ready(function($) {
		$("#arrival, #departure").datepicker({
			showOn: "button",
		    buttonImage: "images/icon/calendar.gif",
		    buttonImageOnly: true
		});					   
	});
</script>

<!-------This is Code for color box-------------------------------------->
<link media="screen" rel="stylesheet" href="colorbox/colorbox.css" />
<script src="colorbox/jquery.min.js"></script>
<script src="colorbox/jquery.colorbox.js"></script>
<!-------End Code for color box-------------------------------------->
<script>
	$(function(){
		$("a[rel='colorbox1']").colorbox();			//Color Box
	});
</script>


<style>
	.indexCn {
		height: 420px;
		overflow: auto;
	 }
	 .btn1{
		 float:right;
		 padding:10px 20px 14px 25px;
		 min-width:160px;
		 background:#4A4A4A;
		 display:block;
		 clear:both;
		 
		-webkit-border-radius: 14px 0px 14px 0px;
		-moz-border-radius: 14px 0px 14px 0px;
		-o-border-radius: 14px 0px 14px 0px;
		-ms-border-radius: 14px 0px 14px 0px;
		border-radius: 14px 0px 14px 0px;
	 }
	 .btn1:hover{
		 background:#2E2E2E;
		 color:#FFF;
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
    	<div id="tool-bar">
        	
        </div>
        
    	<div id="header">
        	<div id="logo"><img src="images/logo.png"/></div>
            <div id="nav">
            <?php include("nav.php") ?>
<!--            	<ul>
          			<li class="active"><a href="index.php"><img src="images/menu/home.png" /></a></li>
                    <li><a href="accommodation.php"><img src="images/menu/accommodation.png" /></a></li>
                    <li><a href="facilities.php"><img src="images/menu/facilities.png" /></a></li>
                    <li><a href="rate.php"><img src="images/menu/rate.png" /></a></li>
                    <li><a href="promotion.php"><img src="images/menu/promotion.png" /></a></li>
                    <li><a href="contact.php"><img src="images/menu/contact.png" /></a></li>
                </ul>-->
            <!--	
            <table>
            	<tr>
                	<td class="active"><a href="index.php">Home</a></td>
                    <td style="width:166px;"><a href="accommodation.php">Accommodation</a></td>
                    <td style="width:180px;"><a href="facilities.php">Facilities & Services</a></td>
                    <td><a href="rate.php">Rate</a></td>
                    <td><a href="promotion.php">Promotion</a></td>
                    <td><a href="contact.php">Contact Us</a></td>
                </tr>
            </table>
             -->
            </div> 
        </div>
        
        <div id="slide">
          <?php include('flashslide_inc.php'); ?>
        </div>
        
        <div id="content">
        	<div id="c1">
            	<div class="topic">
            		<img src="images/wording/welcome.png"/>
                </div>
                <div class="indexCn">
                	<div style="margin-top: 8px;">
                    <a href="images/content/room01_large.png" rel="colorbox1" title="">
                    	<img src="images/content/room01.png"/>
                    </a>
                        &nbsp;&nbsp;&nbsp;
                    <a href="images/content/room02_large.png" rel="colorbox1" title="">
                        <img src="images/content/room02.png"/>
                    </a>
                        <h1>
                        	Welcome to Paragon Place, Pattaya
                        </h1>
                        <p style="line-height:18px;">
                        	Paragon Place, offer guests a most central location of Pattaya. The perfect choice to stay with a peaceful hotel which is an idea for travelers wishing to stop over and stay longer in Pattaya. With a focus on simplicity of design and friendly service, our goal is the comfort and convenience of guests. Select our hotel destinations to fulfill all your travel purposes, whether business or recreation.
                        </p>
                    </div>
                    <br/>
                    <p>
                    	
                      <a href="download/ParagonPlaceFactSheet.pdf" target="_blank" class="btn1">
                        	<img src="images/icon/pdf-icon-24x24.gif" width="24" height="24" /> Download Fact sheet
                        </a>
                    </p>
                    <div id="social" style="margin: 20px 0;">
                    
                    	<a href="https://www.facebook.com/paragonplace" target="_blank" id="img-fb"></a>
                        
                        <a href="https://twitter.com/ParagonPlace" target="_blank" id="img-tw"></a>
                        
                        <a href="http://www.pinterest.com/gmlkparagon" target="_blank" id="img-wpm"></a>
                    </div>
                </div>
            </div>
            <div id="c2">
            	<form action="accommodation.php" method="post">
                	<div id="reservation">
                	<div class="res-title"><img src="images/wording/reservation.png"/></div>
                    <div class="res-book">
                    	<li>
                            <label>
                            	<img src="images/wording/Arrival.png"/>
                            </label>
                            <input name="arrival" id="arrival" required="required"/>
                        </li>
                        <li>
                            <label>
                            	<img src="images/wording/Departure.png" />
                            </label>
                            <input name="departure" id="departure" required="required"/>
                        </li>
                        <li>
                            <label>
                            	<img src="images/wording/NoOfRoom.png"/>
                            </label>
                            <input name="noofroom" id="noofroom" value="0" required="required" style="width:35px; text-align:center;" />
                        </li>
                        <li><br /><label></label><input type="submit" value="BOOKING"/></li>
                    </div>
                </div>
                </form>
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