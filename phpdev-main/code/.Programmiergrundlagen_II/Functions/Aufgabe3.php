<?php

$eingabe = readline("String: ");
$zaehler = 1;
hallo($zaehler, $eingabe);




function hallo($zaehler, $eingabe)
{
    do {
        echo "$eingabe $zaehler" . PHP_EOL;
        $zaehler++;
    } while ($zaehler != 11);
}
