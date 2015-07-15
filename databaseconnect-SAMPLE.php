<? php
$con = mysql_connect("SERVER","USER","PASS");
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("DB", $con);	
?>