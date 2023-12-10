<?php

if (isset($_GET['add'])) {
# test for valid url
$url = $_GET['add'];
if (filter_var($url, FILTER_VALIDATE_URL)) {
# add valid url to dbfile
	echo '+ '.$url.'<br><br>';
	$line = "$url \r\n";
	file_put_contents("db.txt", $line, FILE_APPEND);
	echo 'Thanks! Successfully submitted your URL.<br><br>';
}
# url not valid
else {echo '- '.$url.' ?<br><br>Sorry! No valid URL could be found.<br><br>';
echo 'Use API like this: <i>https://prescene.info/?add=<strong>https://yoursite.com</strong></i><br>';}
}
# url is not given, do nothing
else {}
?>