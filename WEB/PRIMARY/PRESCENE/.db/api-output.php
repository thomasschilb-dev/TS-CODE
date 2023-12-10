<?php

# set a database file
$dbfile = "./.db/db.txt";

# function get_file_size of database file
function get_file_size($dbfile) {
 $size = filesize($dbfile);
 $units = array("Byte","KB","MB","GB","TB","PB","EB","ZB","YB");
 foreach($units as $pow => $unit) {
  if ($size / pow(1024, $pow) < 1024)
   return number_format($size / pow(1024, $pow), 1,  ",", ".") .
   ' ' . $unit;
 }
}

# test if url is given from api
include ("./.db/api.php");

# output dbfile
echo 'Latest Entries:<br><br>';
$array = file($dbfile);
foreach ($array as $element) {echo $element . "<br>";}
echo '<br><br>';
echo '<i>Database Size: '.get_file_size("./.db/db.txt").'</i><br><br>';
?>