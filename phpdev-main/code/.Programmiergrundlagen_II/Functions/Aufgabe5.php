<?php

$zaehler = 1;
$zahl1 = readline("Zahl 1 : ") . PHP_EOL;
$zahl2 = readline("Zahl 2 : ") . PHP_EOL;
echo "" . PHP_EOL;
multiplication($zahl1, $zahl2, $zaehler);

function multiplication($zahl1, $zahl2, $zaehler)
{
    $mult = $zahl1 * $zahl2;
    do {
        echo "$mult" . PHP_EOL;
        $zaehler++;
    } while ($zaehler < 11);
}
