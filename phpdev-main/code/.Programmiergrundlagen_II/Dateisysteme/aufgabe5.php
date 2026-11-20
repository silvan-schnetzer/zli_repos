<?php

/*
$inhalt = file_get_contents("eingabe.txt");
$inhalt2 = file("eingabe.txt");
$zeilen = count($inhalt2);
$groesse = filesize("eingabe.txt") / 1000;

echo "Inhalt der Datei eingabe.txt: $inhalt" . PHP_EOL;
echo "Es wurden $zeilen Zeilen in der datei eingabe.txt gefunden." . PHP_EOL;
echo "Das sind etwa $groesse KB." . PHP_EOL;
*/
$inhalt = file("eingabe.txt");
$zeilen = count($inhalt);
$groesse = filesize("eingabe.txt") / 1000;
echo "Inhalt der Datei eingabe.txt: " . PHP_EOL;
foreach ($inhalt as $sinhalt) {
    echo "$sinhalt";
}
echo "Es wurden $zeilen Zeilen in der Datei eingabe.txt gefunden\nDas sind etwa $groesse KB." . PHP_EOL;
