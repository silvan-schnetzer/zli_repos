<?php

$zahl = (int) readline('Was ist die Zahl? ');

if ($zahl % 2 === 0) {
    printf('Die Zahl %s ist gerade.%s', $zahl, PHP_EOL);
} else {
    printf('Die Zahl %s ist ungerade.%s', $zahl, PHP_EOL);
}
