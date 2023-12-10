<html>
<head></head>
<body>
<font style="font-family: monospace;">
<?php
# read url from api
$add = $_GET["add"];
# test for valid url
$url = $add;
if (filter_var($url, FILTER_VALIDATE_URL)) {
# valid
	echo '+ '.$url.'<br><br>';
	$line = '$url \r\n';
	file_put_contents("db.txt", $line, FILE_APPEND);
	echo 'Successfully added your URL to PRESCENE.<br>';
}
# not valid
else {
echo '- '.$url.' ?<br><br>';
echo '<strong>Use it like this:</strong><br>';
echo '<i>https://prescene.info/?add={protcol}://{yoursite}</i><br><br>';
echo '{protocol} = http, https, irc, ftp, ...<br>':
echo '{yoursite} = ';
}
?>
</font>
</body>
</html>