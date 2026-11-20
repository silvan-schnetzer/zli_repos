<?php

/**
* A Program that saves grades in grades.txt and calculates the average of the grades.
* @author: Silvan Schnetzer
* Date: 20.11.2026
* @version 1.0.0
* @copyright Silvan Schnetzer
*/

use Dom\CharacterData;

$subjects = [];
$grades = [];

$sum = 0;
$avg = 0;
touch("grades.txt");
$filename = "grades.txt";
$grades = askgrades($sum, $grades, $avg, $subjects);
file_put_contents($filename, $subjects);




function askgrades($sum, $grades, $avg, $subjects) // Asks amount of subjects, grades and calculates average, puts all Grades in to grades.txt
{
    do {
        $counterSubject = 0;
        array_push($subjects, readline("Welches Fach? ")); // Asks how the Subjects is called.
        do {
            $counterGrade = 1;
            $input = readline("Note " . ($counterGrade) . " [x = abbruch]: ");
            if (is_numeric($input)) {
                if ($input <= 6 || $input > 0) {
                    array_push($grades, "Note $counterGrade: $input\n");
                    $sum = $sum + $input;
                } else {
                    echo "Note ungueltig, bitte nochmals" . PHP_EOL;
                    $counterGrade--;
                    array_pop($grades);
                    $sum = $sum - $input;
                }
            } elseif ($input != 'x') {
                $counterGrade--;
                echo "Bitte Zahl eingeben!" . PHP_EOL;
            }

            $counterGrade++;
        } while ($input != 'x');
        $counterSubject++;
        $subjects = $grades;

        $again = strtolower(readline("Weiteres Fach erfassen? JA | Nein: "));
    } while ($again == 'ja');
    // TODO
    /*$counter = $counterGrade - 2;
    $avg = $sum / $counter;*/
    var_dump($subjects);
    echo "Der durchschnitt von $counter Noten ist: $avg, das sind in den faechern: $subjects" . PHP_EOL;
    return $grades;
}
