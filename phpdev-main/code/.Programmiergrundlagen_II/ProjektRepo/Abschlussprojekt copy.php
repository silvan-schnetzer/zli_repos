<?php

/**
* A Program that saves grades in grades.txt and calculates the average of the grades.
* @author: Silvan Schnetzer
* Date: 20.11.2026
* @version 1.0.0
* @copyright Silvan Schnetzer
*/

use Dom\CharacterData;

$subjects = (int) 0;
$grades = [];
$sum = 0;
$avg = 0;
touch("grades.txt");
$filename = "grades.txt";
$counter = 1;
$grades = askgrades($counter, $sum, $grades, $avg, $subjects);
file_put_contents($filename, $grades);




function askgrades($counter, $sum, $grades, $avg, $subjects) // Asks amount of subjects, grades and calculates average, puts all Grades in to grades.txt
{

    do {
        $input = readline("Note " . ($counter) . " [x = abbruch]: ");
        if (is_numeric($input)) {
            array_push($grades, "Note $counter: $input\n");
            $sum = $sum + $input;
        } else {
            $counter--;
            echo "Bitte Zahl eingeben!" . PHP_EOL;
        }
        if ($input > 6 || $input < 0) {
            echo "Note unmoeglich, bitte nochmals" . PHP_EOL;
            $counter--;
            array_pop($grades);
            $sum = $sum - $input;
        }
        $counter++;
    } while ($input != ('x'));
}
    $counter = $counter - 2;
    $avg = $sum / $counter;
    echo "Der durchschnitt von $counter Noten ist: $avg, das sind in $subjects Faecher" . PHP_EOL;
    return $grades;
