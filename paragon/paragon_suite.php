<div style="width:268px;display:inline-block;vertical-align:top;">
<a href="images/accommodation/14.jpg" rel="colorbox1" title="">
    <img src="images/accommodation/14.jpg"/>
</a>
<a href="images/accommodation/15.jpg" rel="colorbox1" title="">
    <img src="images/accommodation/15.jpg"/>
</a>
</div>
<div style="width:360px;display:inline-block;vertical-align:top;">
    <h1>Rate of Room</h1>
    <ul class="rate">
        <li><label style="width:140px;">Number of rooms </label>  : 4</li> 
        <li><label style="width:140px;">Average room size</label> : 80 Sq.m (Duplex style)</li> 
        <li><label style="width:140px;">Room rate</label>         : 2,500 Baht</li>
    </ul>
    
    <h1>All rooms feature</h1>
    <ul class="feature">
        <li>Air Conditioning</li> 
        <li>Wi-Fi internet access</li> 
        <li>LCD 32" with cable TV channels</li> 
        <li>Refrigerator</li>
        <li>Complimentary of 2 drinking water daily</li>
        <li>Microwave</li>
        <li>Hairdryer</li>
        <li>Kettle</li>
        <li>Water Heater</li>
        <li>Daily room cleaning service</li>
        <li>Living room</li>
        <li>Pool View</li>
    </ul>	
    <form action="bookingInformation.php" method="post">
    	<input type="hidden" name="room" value="Paragon Suite"/>
        <input type="hidden" name="description" value="paragon_suite.php"/>
        <input type="hidden" name="rate" value="2500"/>
    	<input type="submit" value="BOOK NOW" class="book-now"/>
    </form>
</div>
<script>
      $(document).ready(function(){
          $("a[rel='colorbox1']").colorbox();		//Color Box
      });
</script>