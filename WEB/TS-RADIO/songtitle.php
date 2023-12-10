<?php
$filename = "stream.txt";
$lines = array();
$fp = fopen($filename, "r");

if(filesize($filename) > 0){
    $content = fread($fp, filesize($filename));
    $lines = explode("\n", $content);
    fclose($fp);
}

## print_r($lines);
echo "Now Playing:<br><br> ".$lines[0];
?>