<?php

/*
Author: Silvan Schnetzer
Date: 13.11.2026
Rueckfalllimiten: Nach der 5. Frage: mindestens 500 €, Nach der 10. Frage: mindestens 16.000 €
*/

$json = file_get_contents('wer_wird_millionaer.json');
$questions = json_decode($json, true);
$money = 0;
$gewinne = [50, 100, 200, 300, 500, 1000, 2000, 4000, 8000, 16000, 32000, 64000, 125000, 500000, 1000000];
$relapse = 0;
$play = readline('Bist du sicher du willst die challenge annehmen (j oder n)? ');

if (strtoupper($play) === 'N') {
    echo 'Ok dann hald nicht.' . PHP_EOL;
} else { //Starts game
    echo 'Rückfallslimit nach Frage 5: 500€' . PHP_EOL;
    echo 'Rückfallslimit nach Frage 10: 16.000€' . PHP_EOL;
    echo 'Das Spiel Startet...' . PHP_EOL;
}

if (strtoupper(readline('Bist du sicher du willst die challenge annehmen (j oder n)? ')) === 'N') {
    exit('Ok dann halt nicht.' . PHP_EOL);
}

foreach ($questions as $i => $frage) {
    echo PHP_EOL . 'Frage ' . ($i + 1) . ': ' . $frage['Frage'] . PHP_EOL;
    foreach (['A', 'B', 'C', 'D'] as $buchstabe) {
        echo $buchstabe . ': ' . $frage[$buchstabe] . PHP_EOL;
    }

    $antwort = strtoupper(readline('Auswahl: '));
    if ($antwort !== $frage['richtig']) {
        exit('Leider falsch, du bekommst ' . $relapse . '€.' . PHP_EOL);
    }

    $money = $gewinne[$i];
    echo 'RICHTIG!!! Dein Guthaben ist jetzt ' . $money . '€!' . PHP_EOL;

    if ($i === 4 || $i === 9) { // nach Frage 5 und 10
        $sicher = $money;
        echo 'Rückfalllimit erreicht: ' . $sicher . '€ sind dir sicher.' . PHP_EOL;
    }

    if ($i < 14 && strtoupper(readline('Willst du mit ' . $money . '€ austreten (J oder N)? ')) === 'J') {
        exit('Danke fürs Mitmachen, du hast ' . $money . '€ verdient.' . PHP_EOL);
    }
}

echo 'Gratuliere, du hast 1.000.000€ gewonnen!' . PHP_EOL;
