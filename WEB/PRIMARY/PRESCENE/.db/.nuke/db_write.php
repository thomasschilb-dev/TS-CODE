<?php
$text = "http://emule-project.us.to\n"; // Dateiinhalt
$dbfile = "db.txt"; // Name der Datei
// Datei öffnen,
// wenn nicht vorhanden dann wird die Datei erstellt.
$handler = fopen($dbfile , "a+");
// Dateiinhalt in die Datei schreiben
$huhu = nl2br($text);
fwrite($handler , $huhu);
fclose($handler); // Datei schließen
?>