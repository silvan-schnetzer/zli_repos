<?php

$erstePerson = (string) readline('Wie heisst die erste Person? ');
$groesse1 = readline('Wie gross ist ' . $erstePerson . ' (cm)? ');

$zweitePerson = (string) readline('Wie heisst die zweite Person? ');
$groesse2 = (int) readline('Wie gross ist ' . $zweitePerson . ' (cm)? ');

if ($groesse1 > $groesse2) {
    $differenz1 = (int) ($groesse1 - $groesse2);
    echo $erstePerson . ' ist ' . $differenz1 . ' cm grösser wie ' . $zweitePerson . '.' . PHP_EOL;
} else {
    $differenz2 = (int) ($groesse2 - $groesse1);
    echo $zweitePerson . ' ist ' . $differenz2 . ' cm grösser wie ' . $erstePerson . '.' . PHP_EOL;
}
