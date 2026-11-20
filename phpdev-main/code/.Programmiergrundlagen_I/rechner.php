<?php

$zahl1 = readline('Zahl1: ');
$zahl2 = readline('Zahl2: ');

$operator = readline('Operation? ');

if ($operator === '+') {
    $plus = ($zahl1 + $zahl2);
    echo 'Resultat= ' . $zahl1 . ' + ' . $zahl2 . ' = ' . $plus . PHP_EOL;
} elseif ($operator === '-') {
    $minus = ($zahl1 - $zahl2);
    echo 'Resultat= ' . $zahl1 . ' - ' . $zahl2 . ' = ' . $minus . PHP_EOL;
} elseif ($operator === '*') {
    $multiplikation = ($zahl1 * $zahl2);
    echo 'Resultat= ' . $zahl1 . ' * ' . $zahl2 . ' = ' . $multiplikation . PHP_EOL;
} elseif ($operator === '/') {
    $division = ($zahl1 / $zahl2);
    echo 'Resultat= ' . $zahl1 . ' / ' . $zahl2 . ' = ' . $division . PHP_EOL;
} else {
    echo 'Ungültiger Operator!' . PHP_EOL;
}
