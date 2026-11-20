<?php

$zahl1 = readline("Was ist die Fliesskommazahl: ") . PHP_EOL;
$stellen = (int) readline("Auf wie viele Nachkommastellen willst du runden: ");
$abgerundet = floor($zahl1);
$aufgerundet = ceil($zahl1);
$zahl = round($zahl1, $stellen);

echo "Gerundet auf $stellen Dezimalstellen: $zahl" . PHP_EOL;
echo "Abgerundet zum naechsten Integer: $abgerundet" . PHP_EOL;
echo "Aufgerundet zum naechsten Integer: $aufgerundet" . PHP_EOL;
