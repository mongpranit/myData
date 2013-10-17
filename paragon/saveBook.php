<?
	include 'config.inc.php';
	
	if($_POST['confirm']!=''){
		$checkIn = substr($_POST['arrival'],7,4)."-".substr($_POST['arrival'],4,2)."-".substr($_POST['arrival'],0,2);
		$checkOut = substr($_POST['departure'],7,4)."-".substr($_POST['departure'],4,2)."-".substr($_POST['departure'],0,2);
		
		$sql = "INSERT INTO rsvnbook (rowids,firstname,lastname,tel,email,rmtype,adult,arrival,departure,noofroom,rate,created,amt) 					VALUES(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[tel]','$_POST[email]','$_POST[rmtype]',$_POST[adult],'".$checkIn."','".$checkOut."',$_POST[noofroom],$_POST[rate],NOW(),$_POST[amt])";
		$res = mysql_query($sql) or die(mysql_error());
		if($res){
			$strTo = 'rsvn@pattaya-paragon.com' . ', ';
			$strTo .= 'gm@pattaya-paragon.com' . ', ';
			$strTo .= 'ac@pattaya-paragon.com' . ', ';
			$strTo .= 'fo@pattaya-paragon.com' . ', ';
			$strTo .= 'hk@pattaya-paragon.com' . ', ';
			$strTo .= 'sale@pattaya-paragon.com' . ', ';
			
			$strSubject = "Web Booking In pattaya-paragon.com";
			$strHeader  = 'MIME-Version: 1.0' . "\r\n";
			$strHeader .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$strHeader .= "From:webmaster@pattaya-paragon.com";
			
			$strMessage = "<h1>Booking</h1>
						  <style>
                            body,td,th {
                                font-size: 14px;
                                font-family: Verdana, Geneva, sans-serif;
                                color:#039;
                            }
                            #subtb{
                                font-size: 12px;
                                background: rgb(255, 255, 255);
                                margin: 10px;
                                width: 729px;
                                border-collapse: collapse;
                                text-align: left;
                                border: 1px dotted rgb(0, 51, 153);
                            }

                            #subtb th, #subtb td {
                                font-size: 14px;
                                font-weight: normal;
                                color: rgb(0, 51, 153);
                                padding: 10px 8px;
                                border-bottom: 2px solid rgb(102, 120, 177);
                                border-left: 1px dotted rgb(0, 51, 153);
                                background: rgb(255, 255, 255);
                            }
                        </style>";
			$strMessage .= "<table id='subtb'>
								<tr>
									<td>First Name:</td><td>".$_POST[firstname]."</td>
								</tr>
								<tr>
									<td>Last Name:</td><td>".$_POST[lastname]."</td>
								</tr>
								<tr>
									<td>Phone Number:</td><td>".$_POST[tel]."</td>
								</tr>
								<tr>
									<td>Email:</td><td>".$_POST[email]."</td>
								</tr>
								<tr>
									<td>Room Type:</td><td>".$_POST[rmtype]."</td>
								</tr>
								<tr>
									<td>Arrival:</td><td>".$_POST[arrival]."</td>
								</tr>
								<tr>
									<td>Departure:</td><td>".$_POST[departure]."</td>
								</tr>
								<tr>
									<td>Adult:</td><td>".$_POST[adult]."</td>
								</tr>
								<tr>
									<td>No. of room:</td><td>".$_POST[noofroom]."</td>
								</tr>
								<tr>
									<td>Rate:</td><td>".number_format($_POST[rate],0)."</td>
								</tr>
								<tr>
									<td>Total:</td><td>".number_format($_POST[amt],0)."</td>
								</tr>
							</table>
							<br><br>
							pattaya-paragon.com
							<br>
							Thank you.";
			$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //

			header("Location: confirm.php?res=true");
			
		}
		unset($_POST['confirm']);
	}else{
		header("Location: confirm.php?res=false");
	}
?>
