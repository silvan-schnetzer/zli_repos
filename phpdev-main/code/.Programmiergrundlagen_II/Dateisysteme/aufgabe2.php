<?php

$datei = touch("eingabe.txt");
$dateiname = "eingabe.txt";
$size = filesize($dateiname);
$daten = file_get_contents($dateiname);
$zaehler = 1;
echo "Die Datei eingabe.txt ist $size Bytes gross und enthält folgenden Inhalt:\n$daten" . PHP_EOL;
do {
    $eingabe = readline("Zeile " . ($zaehler) . " [x]: ");
    echo "Zeile $zaehler geschrieben" . PHP_EOL;


    file_put_contents($dateiname, $eingabe . PHP_EOL, FILE_APPEND);

    $zaehler++;
} while ($eingabe != ('x'));


echo 'Es wurden ' . $zaehler-- . " zeilen an eingabe.txt angefuegt." . PHP_EOL;
