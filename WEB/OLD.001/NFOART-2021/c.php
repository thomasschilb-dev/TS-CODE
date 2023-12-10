<?php
 //Liest die Ip aus!//
$ip = getenv ("REMOTE_ADDR");
//Überprüfen ob Ip.dat schon erstellt ist//
if(file_exists("./ips/$ip.ip"))
{
    //Liest in den Array "lesaus" die datei ./ips/c.dat ein//
    $lesaus = file("./ips/c.dat");
    //Gibt den Array "lesaus" aus//
    echo"$lesaus[0]"; 
}
    //Ab hier beginnt die Verneinung - sprich 'die datei $ip.ip existiert nicht'//
else
{
    //Liest die datei ./ips/c.dat wieder in einen Array aus// 
    $lesaus = file("./ips/c.dat");
    //Der Ausgelsende Wert wird um 1 erhöt// 
    $lesaus[0]++; 
    //Die Datei ./ips/c.dat wird im Modus r+ (Lesen und Schreiben/Datenzeiger Am Anfang) geöffnet//
    $datei = fopen("./ips/c.dat","r+");
    //Der Variable $datenm wir der Ausgelsende ( und um 1erhöte) Wert zugeteilt//
    $datenm="$lesaus[0]"; 
    //Der Datenzeiger wird wieder an den Anfang zurückgesetzt//
    rewind($datei);
    //Der Wert der variable $datenm wird in die Datei geschrieben//
    fwrite($datei,$datenm);
    //Die Datei wird geschlossen//
    fclose($datei);
    //Der Wert der vorhin um1 erhört wurden ist,wird ausgegeben//
    echo"$lesaus[0]";
    //Die Datei $ip.ip wird im Modus 'w+' erstellt ( ist nötig für die IP-Sperre)//
    $file = fopen("./ips/$ip.ip","w+"); 
    //Der Variable $datenm wird der wert $ip zugewiesen//
    $datenm="$ip"; 
    //In die Datei wird die Variable $ip geschrieben//
    fwrite($file,$datenm);
    //Die Datei wird geschlossen//
    fclose($file);
}
?>  
