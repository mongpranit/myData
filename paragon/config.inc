<?
 $host = "localhost";
 $user = "comanche";
 $pwd = "3cweb";
 $dbName = "comanche";
 
 $conn = mysql_connect($host,$user,$pwd) or die(mysql_error());
 mysql_query("SET NAMES tis620", $conn);
 mysql_select_db($dbName, $conn);
?>