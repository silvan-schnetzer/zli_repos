<?php

$zaehler = 0;
echo "Eintraege in C:\_DatenAblage\040_ZLI\PHP\phpdev-main\phpdev-main\code\.Programmiergrundlagen_II: " . PHP_EOL;

$dateien = scandir(".");
foreach ($dateien as $datei) {
    echo $datei . PHP_EOL;
}
foreach ($dateien as $datei) {
    if (is_file($datei)) {
        $zaehler++;
    }
}

echo "Es wurden $zaehler normale Dateien gefunden." . PHP_EOL;
