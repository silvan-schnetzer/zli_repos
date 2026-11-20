<?php

$eingaben = [];
$zaehler = 1;
do {
    $eingabe = readline("Zahl $zaehler [x = Abbruch]: ");
    if ($eingabe != 'x') {
        array_push($eingaben, $eingabe);
    }
    $zaehler++;
} while ($eingabe != 'x');

$eingabeListe = implode(", ", $eingaben);
echo 'Zahlen: ' . $eingabeListe . PHP_EOL;
echo 'Groesste Zahl: ' . max($eingaben) . PHP_EOL;
echo 'Kleinste Zahl: ' . min($eingaben) . PHP_EOL;
