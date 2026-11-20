<?php

echo "Hauptmenu\n";
echo "*********\n";
echo "(A)endern\n";
echo "(B)eenden\n";
echo "(D)rucken\n";
echo "(E)ingeben\n";
echo "(L)oeschen\n" . PHP_EOL;



$wahl = (strtoupper(readline('Auswahl: ')));

switch ($wahl) {
    case 'A':
        echo 'Du hast «Aendern» gewählt!' . PHP_EOL;
        break;
    case 'B':
        echo 'Du hast «Beenden» gewählt!' . PHP_EOL;
        break;
    case 'D':
        echo 'Du hast «Drucken» gewählt!' . PHP_EOL;
        break;
    case 'E':
        echo 'Du hast «Eingeben» gewählt!' . PHP_EOL;
        break;
    case 'L':
        echo 'Du hast «Löschen» gewählt!' . PHP_EOL;
        break;
    default:
        echo 'Ungültige Eingabe';
}
