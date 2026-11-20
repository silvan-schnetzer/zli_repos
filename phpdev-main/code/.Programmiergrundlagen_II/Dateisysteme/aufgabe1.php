<?php

$datei = touch("eingabe.txt");
$dateiname = "eingabe.txt";

$zaehler = 1;

do {
    $eingabe = readline("Zeile " . ($zaehler) . " [x]: ");
    echo "Zeile $zaehler geschrieben" . PHP_EOL;


    file_put_contents($dateiname, $eingabe . PHP_EOL, FILE_APPEND);

    $zaehler++;
} while ($eingabe != ('x'));


echo 'Es wurden ' . $zaehler . ' zeilen gespeichert.' . PHP_EOL;
