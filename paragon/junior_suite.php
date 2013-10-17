<div style="width:268px;display:inline-block;vertical-align:top;">
<a href="images/accommodation/10.jpg" rel="colorbox1" title="">
    <img src="images/accommodation/10.jpg"/>
</a>
<a href="images/accommodation/11.jpg" rel="colorbox1" title="">
    <img src="images/accommodation/11.jpg"/>
</a>
</div>
<div style="width:200px;display:inline-block;vertical-align:top;">
    <h1>Rate of Room</h1>
    <ul class="rate">
        <li>Number of rooms   :</li> 
        <li>Average room size :</li> 
        <li>Room rate         :</li> 
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
        <li>Pool View</li>
    </ul>	
    <form action="bookingInformation.php" method="post">
    	<input type="hidden" name="room" value="Junior Suite"/>
        <input type="hidden" name="description" value="junior_suite.php"/>
        <input type="hidden" name="rate" value="3000"/>
    	<input type="submit" value="BOOK NOW" class="book-now"/>
    </form>
</div>

<script>
      $(document).ready(function(){
          $("a[rel='colorbox1']").colorbox();		//Color Box
      });
</script>