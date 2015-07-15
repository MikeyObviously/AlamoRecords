<? php
$con = mysql_connect("mysql.alamorecords.dreamhosters.com","alamo","g00fangOSU");
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("alamorecords", $con);	
?>