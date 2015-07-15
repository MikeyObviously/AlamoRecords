<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
$completeurl = "http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=The%20Beatles&api_key=b25b959554ed76058ac220b7b2e0a026";
$xml = simplexml_load_file($completeurl);
$bio = $xml->artist->bio->summary;
echo "<h1>" . $bio . "</h1>";
?>

</body>
</html>