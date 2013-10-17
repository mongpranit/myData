<?
 $host = "localhost";
 $user = "paragonpat_root";
 $pwd = "paragon";
 $dbName = "paragonpat_db";
 
 $conn = mysql_connect($host,$user,$pwd) or die(mysql_error());
 mysql_query("SET NAMES utf8", $conn);
 mysql_select_db($dbName, $conn);
?>