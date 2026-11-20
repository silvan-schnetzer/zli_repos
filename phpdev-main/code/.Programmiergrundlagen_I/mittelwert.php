<?php

$ersteStrecke = readline('Wie lang ist die erste Strecke in Kilometer? ');
$zweiteStrecke = readline('Wie lang ist die zweite Strecke in Kilometer? ');
$dritteStrecke = readline('Wie lang ist die dritte Strecke in Kilometer? ');
$mittel = ($ersteStrecke + $zweiteStrecke + $dritteStrecke) / '3';

printf('Die durchscnittliche Streckenlänge beträgt %s Kilometer.%s', $mittel, PHP_EOL);
