<div style="width:268px;display:inline-block;vertical-align:top;">
    <a href="images/accommodation/DeluxeCityView/001.jpg" rel="colorbox1" title="">
    	<img src="images/accommodation/DeluxeCityView/001.jpg"/>
    </a>
    <a href="images/accommodation/DeluxeCityView/002.jpg" rel="colorbox1" title="">
    	<img src="images/accommodation/DeluxeCityView/002.jpg"/>
    </a>
</div>
<div style="width:360px;display:inline-block;vertical-align:top;">
    <h1>Rate of Room</h1>
    <ul class="rate">
        <li><label style="width:140px;">Number of rooms </label>  : 51</li> 
        <li><label style="width:140px;">Average room size</label> : 47 Sq.m.</li> 
        <li><label style="width:140px;">Room rate</label>         : 2,000 Baht</li> 
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
        <li>City View</li>
    </ul>	
    <form action="bookingInformation.php" method="post">
    	<input type="hidden" name="room" value="Deluxe City View"/>
        <input type="hidden" name="description" value="deluxe_city_view.php"/>
        <input type="hidden" name="rate" value="2000"/>
    	<input type="submit" value="BOOK NOW" class="book-now"/>
    </form>
</div>


<script>
      $(document).ready(function(){
          $("a[rel='colorbox1']").colorbox();		//Color Box
      });
</script>