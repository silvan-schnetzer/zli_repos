<?php

$zaehler = 1;

hallo($zaehler);

function hallo($zaehler)
{
    do {
        echo "Hallo ZLI" . PHP_EOL;
        $zaehler++;
    } while ($zaehler != 11);
}
