<?php

/////////////////////////////////////////
// Counter + Reloadsperre v1.0
/////////////////////////////////////////

// 0=keine Reloadsperre, 1=Reloadsperre
$aktiv = 1;
// Zeit der Reloadsperre in Minuten
$zeit = 1;
// IP-Datei
$ipdatei = "ips.txt";
// Counterdatei
$datei = "counter.txt";
// Anzahl der führenden Nullen
$stellen = 5;
// Festlegen der Bild-Dimensionen
$breite="15";
$hoehe="19";

/////////////////////////////////////////
// IP-Reloadsperre
/////////////////////////////////////////

function pruf_IP($rem_addr) {
  global $ipdatei,$zeit;
  @$ip_array = file($ipdatei);
  $reload_dat = fopen($ipdatei,"w");
  $this_time = time();
  for ($i=0; $i<count($ip_array); $i++) {
    list($ip_addr,$time_stamp) = explode("|",$ip_array[$i]);
    if ($this_time < ($time_stamp+60*$zeit)) {
      if ($ip_addr == $rem_addr) {
        $gefunden=1;
      }
      else {
        fwrite($reload_dat,"$ip_addr|$time_stamp");
      }
    }
  }
  fwrite($reload_dat,"$rem_addr|$this_time\n");
  fclose($reload_dat);
  return ($gefunden==1) ? 1 : 0;
}

/////////////////////////////////////////
// Counter-Abfrage
/////////////////////////////////////////

if (file_exists($datei) && ($aktiv==0 || ($aktiv==1 && pruf_IP($_SERVER['REMOTE_ADDR'])==0))) {
  // Falls die Datei existiert, wird sie ausgelesen und
  // der dort enthaltene Wert um Eins erhöht.
  $fp=fopen($datei,"r+");
  $zahl=fgets($fp,$stellen);
  $zahl++;
  rewind($fp);
  flock($fp,2);
  fputs($fp,$zahl,$stellen);
  flock($fp,3);
  fclose($fp);
}else if (!file_exists($datei) && ($aktiv==0 || ($aktiv==1 && pruf_IP($_SERVER['REMOTE_ADDR'])==0))) {
  // Die Datei counter.txt existiert nicht, sie wird
  // neu angelegt und mit dem Wert 1 gefüllt.
  $fp=fopen($datei,"w");
  $zahl="1";
  fputs($fp,$zahl,$stellen);
  fclose($fp);
} else {
  // Die Datei existiert zwar, jedoch handelt
  // es sich wahrscheinlich um den gleichen Besucher
  $fp=fopen($datei,"r");
  $zahl=fgets($fp,$stellen);
  fclose($fp);
}

$zahl=sprintf("%0".$stellen."d",$zahl);

?>