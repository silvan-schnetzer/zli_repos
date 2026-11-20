<?php

$ersteZahl = (int) readline('Was ist die erste zahl? ');
$zweiteZahl = (int) readline('Durch welche Zahl willst du dividieren? ');

if ($ersteZahl % $zweiteZahl === 0) {
    $dritteZahl = (int) ($ersteZahl / $zweiteZahl);
    echo $ersteZahl . ' ist ohne rest durch ' . $zweiteZahl . ' teilbar und ergibt ' . $dritteZahl . '.' . PHP_EOL;
} else {
    echo $ersteZahl . ' ist nicht ohne rest durch ' . $zweiteZahl . ' teilbar.' . PHP_EOL;
}
