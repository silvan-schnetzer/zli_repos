<?php

echo "Themenauswahl\n";
echo "*************\n";
echo "1 Modul 101\n";
echo "2 Modul 102\n";
echo "3 Modul 103\n";
echo "4 Modul 104\n";
echo "5 Modul 105\n";
echo "6 Modul 106\n";
echo "7 Modul 107\n" . PHP_EOL;


$wahl = (readline('Wahl: '));

switch ($wahl) {
    case '1':
        echo 'Du hast das Thema «Modul 101» gewählt!' . PHP_EOL;
        break;
    case '2':
        echo 'Du hast das Thema «Modul 102» gewählt!' . PHP_EOL;
        break;
    case '3':
        echo 'Du hast das Thema «Modul 103» gewählt!' . PHP_EOL;
        break;
    case '4':
        echo 'Du hast das Thema «Modul 104» gewählt!' . PHP_EOL;
        break;
    case '5':
        echo 'Du hast das Thema «Modul 105» gewählt!' . PHP_EOL;
        break;
    case '6':
        echo 'Du hast das Thema «Modul 106» gewählt!' . PHP_EOL;
        break;
    case '7':
        echo 'Du hast das Thema «Modul 107» gewählt!' . PHP_EOL;
        break;
    default:
        echo 'Ungültige Eingabe';
}
