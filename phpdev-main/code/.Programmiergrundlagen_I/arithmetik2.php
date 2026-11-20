<?php

$born = readline('in welchem Jahr bist du geboren? ');
$date = date('Y');
$born += ('65');
$born -= $date;

printf("Bis zu deinem 65. Geburtstag dauert es noch %s Jahre %s", $born, PHP_EOL);
