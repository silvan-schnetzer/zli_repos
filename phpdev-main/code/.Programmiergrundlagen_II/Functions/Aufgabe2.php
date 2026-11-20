<?php

$zaehler = 1;

hallo($zaehler);

function hallo($zaehler)
{
    do {
        echo "Hallo ZLI $zaehler" . PHP_EOL;
        $zaehler++;
    } while ($zaehler != 11);
}
