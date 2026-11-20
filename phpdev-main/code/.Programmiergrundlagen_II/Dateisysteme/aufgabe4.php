<?php

$zaehler = 0;
$groesse = 0;
$dateien = scandir(".");
foreach ($dateien as $datei) {
    echo "$datei hat " . filesize($datei) . " bytes" . PHP_EOL;
    $groesse += filesize($datei);
    $zaehler++;
}
echo "es wurden $groesse Bytes in $zaehler Dateien gefunden." . PHP_EOL;
