<?
$db = mysql_connect("localhost","maxoutso_db","mishka123") or die(mysql_error());
mysql_select_db("maxoutso_db",$db) or die(mysql_error());
date_default_timezone_set("Europe/Moscow");
mysql_set_charset('utf8',$db);
?>