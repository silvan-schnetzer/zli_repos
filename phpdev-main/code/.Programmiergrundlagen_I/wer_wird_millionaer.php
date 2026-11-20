<?php

/**
* My own "who wants to be a millionaire game
* @author: Silvan Schnetzer
* Date: 13.11.2026
* Rueckfalllimiten: Nach der 5. Frage: 500 €, Nach der 10. Frage: 16.000 €
* @version 1.0.0
* @copyright 2026 Silvan Schnetzer
*/

$money = 0;
$play = readline('Bist du sicher du willst die challenge annehmen (j oder n)? ');

if (strtoupper($play) === 'N') {
    echo 'Ok dann hald nicht.' . PHP_EOL;
} else { //Starts game
    echo 'Rückfallslimit nach Frage 5: 500€' . PHP_EOL;
    echo 'Rückfallslimit nach Frage 10: 16.000€' . PHP_EOL;
    echo 'Das Spiel Startet...' . PHP_EOL;
}

questions1(); // Asks first question

$option1 = (strtoupper(readline('Auswahl: ')));
switch ($option1) {
    case 'A':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'B':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 50€!' . PHP_EOL;
        $money = 50;
        break;
    case 'C':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'D':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung.' . PHP_EOL;
        exit;
}
cashOut($money);

questions2(); // Asks second question

$option2 = (strtoupper(readline('Auswahl: ')));
switch ($option2) {
    case 'A':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 100€!' . PHP_EOL;
        $money = 100;
        break;
    case 'B':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'C':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'D':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung.' . PHP_EOL;
        exit;
}
cashOut($money);

questions3(); //Asks third question

    $option3 = (strtoupper(readline('Auswahl: ')));
switch ($option3) {
    case 'A':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'B':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'C':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 200€!' . PHP_EOL;
        $money = 200;
        break;
    case 'D':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung.' . PHP_EOL;
        exit;
}
cashOut($money);

questions4(); //Asks fourth question

    $option4 = (strtoupper(readline('Auswahl: ')));
switch ($option4) {
    case 'A':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'B':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'C':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 300€!' . PHP_EOL;
        $money = 300;
        break;
    case 'D':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung.' . PHP_EOL;
        exit;
}
cashOut($money);

questions5(); //Asks fifth question

    $option5 = (strtoupper(readline('Auswahl: ')));
switch ($option5) {
    case 'A':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'B':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'C':
        echo 'Leider falsch, Danke fürs mitmachen!' . PHP_EOL;
        exit;
    case 'D':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 500€!' . PHP_EOL;
        $money = 500;
        break;
    default:
        echo 'Ungültige Eingabe, disqualifizierung.' . PHP_EOL;
        exit;
}
cashOut($money);

echo 'Rückfalllimit erreicht. Auch wenn du jetzt ein Fehler machst, bekommst du 500€.' . PHP_EOL;

questions6(); //Asks sixth question

    $option6 = (strtoupper(readline('Auswahl: ')));
switch ($option6) {
    case 'A':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'B':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'C':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 1.000€!' . PHP_EOL;
        $money = 1000;
        break;
    case 'D':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
}
cashOut($money);

questions7(); //Asks seventh question

    $option7 = (strtoupper(readline('Auswahl: ')));
switch ($option7) {
    case 'A':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'B':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'C':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'D':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 2.000€!' . PHP_EOL;
        $money = 2000;
        break;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
}
cashOut($money);

questions8(); //Asks eighth question

    $option8 = (strtoupper(readline('Auswahl: ')));
switch ($option8) {
    case 'A':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 4.000€!' . PHP_EOL;
        $money = 4000;
        break;
    case 'B':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'C':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'D':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
}
cashOut($money);

questions9(); //Asks nineth question

    $option9 = (strtoupper(readline('Auswahl: ')));
switch ($option9) {
    case 'A':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'B':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'C':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'D':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 8.000€!' . PHP_EOL;
        $money = 8000;
        break;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
}
cashOut($money);

questions10(); //Asks tenth question

    $option10 = (strtoupper(readline('Auswahl: ')));
switch ($option10) {
    case 'A':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'B':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    case 'C':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 16000€!' . PHP_EOL;
        $money = 16000;
        break;
    case 'D':
        echo 'Leider falsch, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 500€!' . PHP_EOL;
        exit;
}
cashOut($money);

echo 'Rückfalllimit erreicht. Auch wenn du jetzt ein Fehler machst, bekommst du 16.000€.' . PHP_EOL;

questions11(); //Asks eleventh question

    $option11 = (strtoupper(readline('Auswahl: ')));
switch ($option11) {
    case 'A':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'B':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 32.000€!' . PHP_EOL;
        $money = 32000;
        break;
    case 'C':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'D':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
}
cashOut($money);

questions12(); //Asks 12. question

    $option12 = (strtoupper(readline('Auswahl: ')));
switch ($option12) {
    case 'A':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'B':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'C':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'D':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 64.000€!' . PHP_EOL;
        $money = 64000;
        break;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
}
cashOut($money);

questions13(); //Asks 13. question

    $option13 = (strtoupper(readline('Auswahl: ')));
switch ($option13) {
    case 'A':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 125.000€!' . PHP_EOL;
        $money = 125000;
        break;
    case 'B':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'C':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'D':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
}
cashOut($money);

questions14(); //Asks 14. question

    $option14 = (strtoupper(readline('Auswahl: ')));
switch ($option14) {
    case 'A':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'B':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Dein Guthaben ist jetzt 500.000€!' . PHP_EOL;
        $money = 500000;
        break;
    case 'C':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        break;
    case 'D':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
}
cashOut($money);

questions15(); //Asks 15. question

    $option15 = (strtoupper(readline('Auswahl: ')));
switch ($option15) {
    case 'A':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'B':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    case 'C':
        echo 'RICHTIG!!!' . PHP_EOL;
        echo '' . PHP_EOL;
        echo 'Du hast 1.000.000€ gewonnen!!!' . PHP_EOL;
        $money = 1000000;
        break;
    case 'D':
        echo 'Leider falsch, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
    default:
        echo 'Ungültige Eingabe, disqualifizierung, trotzdem bekommst du 16.000€!' . PHP_EOL;
        exit;
}
echo 'Gratuliere, du hast 1.000.000, vielen dank fürs mitspielen.' . PHP_EOL;
exit;

function questions1() //Shows the first question and awnsers
{
    echo 'Drücke Enter um die erste Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 1: Peter Kreuder komponierte 1936 den Schlager "Ich wollt ich wär ein ..."?' . PHP_EOL;
    echo 'A: Hund' . PHP_EOL;
    echo 'B: Huhn' . PHP_EOL;
    echo 'C: Hummer' . PHP_EOL;
    echo 'D: Huflattich' . PHP_EOL;
}
function questions2()//Shows the second question and awnsers
{
    echo 'Drücke Enter um die zweite Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 2: Wobei handelt es sich um ein Notsignal im internationalen Funkverkehr?' . PHP_EOL;
    echo 'A: Mayday' . PHP_EOL;
    echo 'B: Down Town' . PHP_EOL;
    echo 'C: Jetset' . PHP_EOL;
    echo 'D: Flower Power' . PHP_EOL;
}
function questions3()//Shows the third question and awnsers
{
    echo 'Drücke Enter um die dritte Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 3: Wie heisst - laut einem Märchen der Brüder Grimm - die Schwester von Schneeweisschen?' . PHP_EOL;
    echo 'A: Fliederlila' . PHP_EOL;
    echo 'B: Maisgelb' . PHP_EOL;
    echo 'C: Rosenrot' . PHP_EOL;
    echo 'D: Kornblumenblau' . PHP_EOL;
}
function questions4()//Shows the fourth question and awnsers
{
    echo 'Drücke Enter um die vierte Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 4: Wer hat von Berufs wegen mit dem Spritzenhaus zu tun?' . PHP_EOL;
    echo 'A: Gärtner' . PHP_EOL;
    echo 'B: Krankenschwester' . PHP_EOL;
    echo 'C: Feuerwehrmann' . PHP_EOL;
    echo 'D: Konditor' . PHP_EOL;
}
function questions5()//Shows the fifth question and awnsers
{
    echo 'Drücke Enter um die fünfte Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 5: Was ist die Amtssprache von Mexiko?' . PHP_EOL;
    echo 'A: Portugiesisch' . PHP_EOL;
    echo 'B: Englisch' . PHP_EOL;
    echo 'C: Französisch' . PHP_EOL;
    echo 'D: Spanisch' . PHP_EOL;
}
function questions6()//Shows the sixth question and awnsers
{
    echo 'Drücke Enter um die sechste Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 6: Unter welchem Namen sangen Wigald Boning und Olli Dittrich "Lieder, die die Welt nicht braucht"?' . PHP_EOL;
    echo 'A: Die Behämmerten' . PHP_EOL;
    echo 'B: Die Abgedrehten' . PHP_EOL;
    echo 'C: Die Doofen' . PHP_EOL;
    echo 'D: Die Irren' . PHP_EOL;
}
function questions7()//Shows the seventh question and awnsers
{
    echo 'Drücke Enter um die siebte Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 7: Was ist ein Rebus?' . PHP_EOL;
    echo 'A: Kreditinstitut' . PHP_EOL;
    echo 'B: Werkzeug' . PHP_EOL;
    echo 'C: Weinstock' . PHP_EOL;
    echo 'D: Bilderrätsel' . PHP_EOL;
}
function questions8()//Shows the eighth question and awnsers
{
    echo 'Drücke Enter um die achte Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 8: Wie nennt man von Gletschern transportierten Gesteinsschutt?' . PHP_EOL;
    echo 'A: Moräne' . PHP_EOL;
    echo 'B: Muräne' . PHP_EOL;
    echo 'C: Morelle' . PHP_EOL;
    echo 'D: Murnau' . PHP_EOL;
}
function questions9()//Shows the nineth question and awnsers
{
    echo 'Drücke Enter um die neunte Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 9: Welches deutsche Fürstenhaus organisierte bis ins 19. Jahrhundert die kaiserliche Reichspost?' . PHP_EOL;
    echo 'A: Fürstenberg' . PHP_EOL;
    echo 'B: Schaumburg-Lippe' . PHP_EOL;
    echo 'C: Hohenlohe' . PHP_EOL;
    echo 'D: Thurn und Taxis' . PHP_EOL;
}
function questions10()//Shows the tenth question and awnsers
{
    echo 'Drücke Enter um die zehnte Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 10: Wobei handelt es sich nicht um ein Insekt?' . PHP_EOL;
    echo 'A: Stechmücke' . PHP_EOL;
    echo 'B: Wintermücke' . PHP_EOL;
    echo 'C: Grasmücke' . PHP_EOL;
    echo 'C: Grasmücke' . PHP_EOL;
}
function questions11()//Shows the eleventh question and awnsers
{
    echo 'Drücke Enter um die elfte Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 11: Wie heisst das traditionelle Pferderennen in Siena?' . PHP_EOL;
    echo 'A: Calcio' . PHP_EOL;
    echo 'B: Palio' . PHP_EOL;
    echo 'C: Barolo' . PHP_EOL;
    echo 'D: Boccia' . PHP_EOL;
}
function questions12()//Shows the 12. question and awnsers
{
    echo 'Drücke Enter um die 12. Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 12: Was ist nach Mahón, dem Hauptort der Insel Menorca, benannt?' . PHP_EOL;
    echo 'A: Marone' . PHP_EOL;
    echo 'B: Mahagoni' . PHP_EOL;
    echo 'C: Marihuana' . PHP_EOL;
    echo 'D: Mayonnaise' . PHP_EOL;
}
function questions13()//Shows the 13. question and awnsers
{
    echo 'Drücke Enter um die 13. Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 13: Welcher deutsche Boxer schlug im Juni 1952 den Ringrichter Max Pippow zu Boden?' . PHP_EOL;
    echo 'A: Peter Müller' . PHP_EOL;
    echo 'B: Eckhard Dagge' . PHP_EOL;
    echo 'C: Bubi Scholz' . PHP_EOL;
    echo 'D: Max Schmeling' . PHP_EOL;
}
function questions14()//Shows the 14. question and awnsers
{
    echo 'Drücke Enter um die 14. Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 14: Wo befindet sich der Hauptsitz der UNESCO?' . PHP_EOL;
    echo 'A: Brüssel' . PHP_EOL;
    echo 'B: Paris' . PHP_EOL;
    echo 'C: London' . PHP_EOL;
    echo 'D: Helsinki' . PHP_EOL;
}
function questions15()//Shows the 15. question and awnsers
{
    echo 'Drücke Enter um die 15. Frage zu erhalten' . PHP_EOL;
    readline('') . PHP_EOL;
    echo '' . PHP_EOL;
    echo 'Frage 15: Mit wem stand Edmund Hillary 1953 auf dem Gipfel des Mount Everest?' . PHP_EOL;
    echo 'A: Roger Federer' . PHP_EOL;
    echo 'B: Reto Froelicher' . PHP_EOL;
    echo 'C: Tenzing Norgay' . PHP_EOL;
    echo 'D: Silvan Schnetzer' . PHP_EOL;
}
function cashOut($money)//asks Player if they want to cash out
{
    $cashOut = (strtoupper(readline('Willst du mit ' . $money . ' Austreten (J Oder N)? ')));
    if ($cashOut === 'J') {
        echo 'Danke fürs mitmachen, du hast ' . $money . ' verdient' . PHP_EOL;
        exit;
    } else {
        echo 'Ok' . PHP_EOL;
    }
}
