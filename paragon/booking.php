<script>
   $(document).ready(function(){
	  $('#myForm').validationEngine();
   });
 </script>
<form action="saveBook.php" method="post" id="myForm">
<div style="display:inline-block; width:50%; vertical-align:top;">
	<h1>Room Details</h1>
    <div class="field">
        <li>Arrival:</li>
        <li>
            <?=$_POST['arrival'];?>
            <input type="hidden" name="arrival" value="<?=$_POST['arrival'];?>"/>
        </li>
    </div>
    <div class="field">
        <li>Departure:</li>
        <li>
            <?=$_POST['departure'];?>
            <input type="hidden" name="departure" value="<?=$_POST['departure'];?>"/>
        </li>
    </div>
    <div class="field">
        <li>Night(s):</li>
        <li>
            <?
				function IntervalDays($CheckIn,$CheckOut){ 
					$CheckIn_dd = substr($CheckIn,0,2); 
					$CheckIn_mm = substr($CheckIn,4,2);
					$CheckIn_yy = substr($CheckIn,7,4);
					
					$CheckOut_dd = substr($CheckOut,0,2); 
					$CheckOut_mm = substr($CheckOut,4,2);
					$CheckOut_yy = substr($CheckOut,7,4);
					
					$date1 =  mktime(0, 0, 0, $CheckIn_mm,$CheckIn_dd,$CheckIn_yy); 
					$date2 =  mktime(0, 0, 0,$CheckOut_mm,$CheckOut_dd,$CheckOut_yy); 
					$interval =($date2 - $date1)/(3600*24); 
					
					return  $interval; 
				} 

				$night = IntervalDays($_POST['arrival'],$_POST['departure']);
				echo $night;
			?>
        </li>
    </div>
    <div class="field">
        <li>Adut(s):</li>
        <li>
            <?=$_POST['adult'];?>
            <input type="hidden" name="adult" value="<?=$_POST['adult'];?>"/>
        </li>
    </div>
    <div class="field">
        <li>No. Of Room:</li>
        <li>
            <?=$_POST['noofroom'];?>
            <input type="hidden" name="noofroom" value="<?=$_POST['noofroom'];?>"/>
        </li>
    </div>
    <div class="field">
        <li>Room:</li>
        <li>
            <?=$_POST['room'];?>
            <input type="hidden" name="rmtype" value="<?=$_POST['room'];?>"/>
        </li>
    </div>
    <div class="field">
        <li>Rate:</li>
        <li>
            <?=number_format($_POST['rate'],0);?>
            <input type="hidden" name="rate" value="<?=$_POST['rate'];?>"/>
        </li>
    </div>
    <div class="field">
        <li>Total:</li>
        <li>
            <?=number_format((($_POST['rate']*$_POST['noofroom'])*$night),0);?>
            <input type="hidden" name="amt" value="<?=(($_POST['rate']*$_POST['noofroom'])*$night);?>"/>
        </li>
    </div>
    
    <h1>Policies and Important Information for this Property</h1>
    <div style="padding-top: 4px;">
    	<li>
    	<b>Cancellation Policy</b><br> 
        Customers can cancel their reservation free of charge up to 2 days before arrival (local time). Payments made to HostelBookers are non-refundable.<br><br>
        </li>
        <li>
        <b>Check-in / Check-out</b><br> 
        14:00 / 11:00
        </li>
    </div>
</div>

<div style="display:inline-block; width:45%; vertical-align:top;">
    <h1>Guest Information</h1>
    <div class="field">
        <li>First Name*</li>
        <li>
            <input type="text" name="firstname" class="validate[required]"/>
        </li>
    </div>
    
    <div class="field">
        <li>Last Name*</li>
        <li>
            <input type="text" name="lastname" class="validate[required]"/>
        </li>
    </div>
    
    <div class="field">
        <li>Phone Number*</li>
        <li>
            <input type="text" name="tel" class="validate[required]"/>
        </li>
    </div>
    
    <div class="field">
        <li>Email*</li>
        <li>
            <input type="text" name="email" id="password" class="validate[required]"/>
        </li>
    </div>
    
    <div class="field">
        <li>Confirm email*</li>
        <li>
            <input type="text" name="cfmemail" class="validate[required,equals[password]]"/>
        </li>
    </div>
    
    <!--
    <h1>Payment</h1>
    <img src="images/icon/cc_amex.gif"/>
    <img src="images/icon/cc_jcb.gif"/>
    <img src="images/icon/cc_mastercard.gif"/>
    <img src="images/icon/cc_visa.gif"/>
    <div class="field">
        <li>Name on Card*</li>
        <li>
            <input type="text" name="firstname"/>
        </li>
    </div>
    
    <div class="field">
        <li>Card Type*</li>
        <li>
            <select name="cardType" id="cardType" class="creditDetailsInput" tabindex="23">
                <option value="" selected="selected">
                -- Select card type --
                </option>
                <option value="1_amex">
                American Express
                </option>
                <option value="3_JCB">
                JCB
                </option>
                <option value="4_maestro">
                Maestro
                </option>
                <option value="5_mastercard">
                Mastercard
                </option>
                <option value="7_maestrouk">
                UK Maestro
                </option>
                <option value="8_visa">
                Visa
                </option>
                <option value="">
                -- More cards --
                </option>
                <option value="4_4b-maestro">
                4B - Maestro
                </option>
                <option value="5_4b-mastercard">
                4B - Mastercard
                </option>
                <option value="8_4b-visa">
                4B - Visa
                </option>
                <option value="4_bancomat">
                Bancomat
                </option>
                <option value="4_bankomat">
                Bankomat
                </option>
                <option value="8_cartebleue">
                Carte Bleue
                </option>
                <option value="8_dankort">
                Dankort
                </option>
                <option value="4_eccard">
                EC Card
                </option>
                <option value="4_laser">
                Laser
                </option>
                <option value="4_mrcash">
                Mr Cash
                </option>
                <option value="5_multibanco-mastercard">
                Multibanco - MasterCard
                </option>
                <option value="8_multibanco-visa">
                Multibanco - Visa
                </option>
                <option value="4_postcard">
                Postcard
                </option>
                <option value="4_servired-maestro">
                ServiRed - Maestro
                </option>
                <option value="5_servired-mastercard">
                ServiRed - Mastercard
                </option>
                <option value="8_servired-visa">
                ServiRed - Visa
                </option>
                </select>
        </li>
    </div>
    
    <div class="field">
        <li>Card Number*</li>
        <li>
            <input type="text" name="firstname"/>
        </li>
    </div>
    
    <div class="field">
        <li>Security Code*</li>
        <li>
            <input type="text" name="firstname" style="width:35px; cursor:pointer;"/> <img src="images/icon/icnhelp.gif" onClick="showCCVhelp();"/> 
        </li>
    </div>
    
    <div class="field">
        <li>Expiry Date*</li>
        <li>
            <select name="expirymonth" id="expirymonth" class="inputMedium expiryinput" tabindex="28">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09" selected="selected">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <select name="expiryyear" id="expiryyear" class="inputMedium expiryinput" tabindex="29">
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
            </select>
        </li>
    </div>
    --> 
</div>  
<br /><br /> <br /><br /> 
<div style="text-align:center;"><input type="submit" name="confirm" value="Confirm booking" class="btn-submit"></div>  
</form>