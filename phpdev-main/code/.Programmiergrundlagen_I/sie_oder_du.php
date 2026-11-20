<?php

$vorname = (string) readline('Vorname? ');
$nachname = (string) readline('Nachname? ');
$alter = (int) readline('Alter? ');

if ($alter >= 18) {
    echo 'Sie heissen ' . $vorname . ' ' . $nachname . ' und sind ' . $alter . ' Jahre alt.' . PHP_EOL;
} else {
    echo 'Du heisst ' . $vorname . ' ' . $nachname . ' und du bist ' . $alter . ' Jahre alt.' . PHP_EOL;
}
