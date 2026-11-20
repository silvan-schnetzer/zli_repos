<?php

$name = readline('Wie heißt du? ');
$ort = readline('Wo wohnst du? ');
$jahr = readline('In welchem Jahr bist du geboren? ');

printf("Hallo %s, du wohnst in %s. Du bist im Jahr %s geboren.%s", $name, $ort, $jahr, PHP_EOL);
