<?php

$jahr = (int) date('Y');
$Jahrgang = (int) readline('In Welchem Jahr bist du Geboren? ');

if ($Jahrgang < $jahr - 114) {
    echo 'Es gibt niemand der so alt ist!' . PHP_EOL;
} elseif ($Jahrgang > $jahr) {
    echo 'NOK! Das geburtsjahr liegt in der Zukunft.' . PHP_EOL;
} else {
    echo 'Du bist ' . ($jahr - $Jahrgang) . ' Jahre alt.' . PHP_EOL;
}
