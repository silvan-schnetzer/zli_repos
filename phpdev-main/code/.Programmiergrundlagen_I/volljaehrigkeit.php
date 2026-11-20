<?php

$alter = (int) readline('Wie alt bist du? ');

if ($alter >= 18) {
    echo 'Du bist volljährig!' . PHP_EOL;
} else {
    echo 'Du bist noch nicht volljährig!' . PHP_EOL;
}
