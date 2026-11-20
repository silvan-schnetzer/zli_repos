<?php

$adressen = [];

do {
    echo "Adressenverwaltung" . PHP_EOL;
    echo "1 Alle Adressen Anzeigen" . PHP_EOL;
    echo "2 Adresse anzeigen" . PHP_EOL;
    echo "3 Adresse erfassen" . PHP_EOL;
    echo "4 Adresse löschen" . PHP_EOL;
    echo "0 Programm beenden" . PHP_EOL;


    $wahl = readline('Deine Auswahl: ');

    switch ($wahl) {
        case '1':
            if (empty($adressen)) {
                echo 'Keine Adressen zum anzeigen.' . PHP_EOL;
            } else {
                foreach ($adressen as $index => $adresse) {
                    echo ($index + 1) . ': ' . $adresse['name'] . PHP_EOL;
                }
            }
            readline('Enter');
            break;

        case '2':
            $nummer = (int) readline('Welche Adresse willst du sehen? ') . PHP_EOL;
            foreach ($adressen as $index => $adresse) {
                echo $adresse['name'] . ', ' . $adresse['ort'] . PHP_EOL;
            }
            readline('Enter');
            break;

        case '3':
            $name = readline('Name: ');
            $ort = readline('Ort: ');
            $adresse = [
            'name' => $name,
            'ort' => $ort
            ];
            $adressen[] = $adresse;
            echo 'Adresse gespeichert.' . PHP_EOL;
            break;
        case '4':
            $entfernen = readline('Welche Adresse willst du entfernen? ');
            unset($adressen[$entfernen]);
            break;
        case '0':
            exit;
        default:
            echo 'Ungültige Eingabe';
    }
} while ($wahl != 0);
