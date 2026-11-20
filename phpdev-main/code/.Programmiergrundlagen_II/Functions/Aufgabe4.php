<?php

$zaehler = 1;
$eingabe1 = readline("Was ist die erste Eingabe: ") . PHP_EOL;
$eingabe2 = readline("Was ist die zweite Eingabe: ") . PHP_EOL;
ausgabe($eingabe1, $eingabe2, $zaehler);

function ausgabe($eingabe1, $eingabe2, $zaehler)
{
    do {
        echo "$eingabe1 $eingabe2 $zaehler" . PHP_EOL;
        $zaehler++;
    } while ($zaehler < 11);
}
