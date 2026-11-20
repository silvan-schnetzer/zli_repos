<?php

$alter1 = (int) readline('Wie alt ist die Erste Person? ');
$alter2 = (int) readline('Wie alt ist die Zweite Person? ');
$alter3 = (int) readline('Wie alt ist die dritte Person? ');

if ($alter1 + $alter2 + $alter3 <= 100) {
    echo 'Nicht älter wie 100.' . PHP_EOL;
} else {
    echo 'Zusammen seit ihr älter wie 100, ihr seit ' . ($alter1 + $alter2 + $alter3) . ' Jahre alt!' . PHP_EOL;
}
