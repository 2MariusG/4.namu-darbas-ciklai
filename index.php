<?php

// UZDUOTIS #1
//Naršyklėje nupieškite linija iš 400 “*”. 
//Naudodami css stilių “suskaldykite” liniją taip,
//kad visos žvaigždutės matytųsi ekrane;
//Programiškai “suskaldykite” žvaigždutes taip, 
//kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #1' . '<br>';
echo '<br>';

$starLine = '*';

for ($i = 0; $i < 10; $i++) {
    echo '<br>';
    for ($x = 0; $x < 50; $x++) {
        echo $starLine;
    }
}
echo '<br>';
// UZDUOTIS #2
//Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
//atspausdinkite juos atskirtus tarpais ir suskaičiuokite 
//kiek tarp jų yra didesnių už 150. 
//Skaičiai didesni nei 275 turi būti raudonos spalvos.

echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #2' . '<br>';
echo '<br>';

$countBig = 0;

for ($i = 0; $i <= 300; $i++) {
    $numbers = rand(0, 300);
    if ($numbers > 150) {
        $countBig++;
    }
    if ($numbers > 275) {
        echo "<span style='color: red;'> $numbers </span>";
    } else {
        echo $numbers . ' ';
    }
}
echo '<br><br>';
echo "Skaiciu didesniu uz 150 kiekis:  $countBig" . '<br>';


// UZDUOTIS #3
// Vienoje eilutėje atspausdinkite visus skaičius
// nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476),
// kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. 
// Po paskutinio skaičiaus kablelio neturi būti. 
// Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #3' . '<br>';
echo '<br>';

$skaiciuAibe = rand(3000, 4000);
$skaiciuStringas = '';
for ($i = 1; $i <= $skaiciuAibe; $i++) {
    if ($i % 77 == 0) {
        $skaiciuStringas = $skaiciuStringas . ($i . ',');
    }
}
echo "<span style='word-wrap: break-word;'> $skaiciuStringas </span>";
echo substr($skaiciuStringas, 0, (strlen($skaiciuStringas) - 1));
echo '<br><br>';




// UZDUOTIS #4
//Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”.
// Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
//* * * * * * * * * * *
//* * * * * * * * * * *
//* * * * * * * * * * *
//* * * * * * * * * * *
//* * * * * * * * * * *
//* * * * * * * * * * *
//* * * * * * * * * * *

echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #4' . '<br>';
echo '<br>';

$kvadratas = "*";
for ($i = 0; $i < 25; $i++) {
    echo '<br>';
    for ($x = 0; $x < 25; $x++) {
        echo "<span style =' padding: 5px';>$kvadratas</span>";
    }
}
echo '<br><br>';


echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #5' . '<br>';
echo '<br>';

$kvadratas = "*";
$b = 25;
for ($i = 0; $i < 25; $i++) {
    echo '<br>';
    $b--;
    for ($x = 0; $x < 25; $x++) {
        if ($x == $i || $b == $x) {
            echo "<span style =' padding: 5px; color:red';>$kvadratas</span>";
        } else {
            echo "<span style =' padding: 5px';>$kvadratas</span>";
        }
    }
}
echo '<br><br>';


//UZDUOTIS #6
//Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija,
// kur 0 yra herbas, o 1 - skaičius.
// Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: 
//“S” jeigu iškrito skaičius ir “H” jeigu herbas.
// Suprogramuokite keturis skirtingus scenarijus
//kai monetos metimą stabdome:
//Iškritus herbui;
//Tris kartus iškritus herbui;
//Tris kartus iš eilės iškritus herbui;
echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #6' . '<br>';
echo '<br>';

$coin = rand(0, 1);

echo $coin == 0 ? 'H' : 'S';

//Scenarijus "a"
echo 'Scenarijus "a"' . '<br>';
while (true) {
    $coin = rand(0, 1);
    echo $coin == 0 ? 'H' : 'S' . '<br>';
    if ($coin == 0) {
        echo '<br>' . 'Iskrito Herbas';
        break;
    }
}
echo 'Scenarijus "b"' . '<br>';
while (true) {
    $coin = rand(0, 1);
    echo $coin == 0 ? 'H' : 'S' . '<br>';
    if ($coin == 0) {
        echo ($herbas++) . '<br>';
    }
    if ($herbas == 3) {
        echo '<br>' . 'Iskrito Herbas';
        break;
    }
}

echo 'Scenarijus "c"' . '<br>';

while ($herbuSuma < 3) {
    $coin = rand(0, 1);
    if ($coin == 0) {
        echo 'H ';
        $herbuSuma++;
    } else {
        echo 'S ';
        $herbuSuma = 0;
    }
}
echo '<br><br>';

//UZDUOTIS #7
//Kazys ir Petras žaidžiai šaškėm. 
//Petras surenka taškų kiekį nuo 10 iki 20,
// Kazys surenka taškų kiekį nuo 5 iki 25.
//Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​
//laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. 
//Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
//Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.
echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #7' . '<br>';
echo '<br>';


$kazioPartija = 0;
$petroPartija = 0;

$nugaletojas = 0;

while ($kazioPartija < 222 && $petroPartija  < 222) {
    $kazys = rand(10, 20);
    $petras = rand(5, 25);

    $kazioPartija += $kazys;
    $petroPartija += $petras;

    if ($kazys > $petras) {
        echo "Kazys laimejo Partija surinko:  $kazys taskus, viso turi tasku: $kazioPartija " . '<br>';
    } else {
        echo "Petras laimejo Partija surinko: $petras taskus, viso turi tasku: $petroPartija" . '<br>';
    }
}
if ($kazioPartija >= 222) {
    echo "Partiją laimėjo KAZYS" . '<br>';
} else {
    echo "Partiją laimėjo PETRAS ​" . '<br>';
}

echo '<br><br>';

//UZDUOTIS #8
// Reikia nupaišyti pilnavidurį rombą, 
// taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), 
// kurio aukštis 21 eilutė. 
// Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos 
//(perkrovus puslapį spalvos turi keistis).
echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #8' . '<br>';
echo '<br>';

$star = "*";
$h = 11;

for ($i = 1; $i < $h; $i++) {
    $color1 = dechex(rand(0x000000, 0xFFFFFF));
    $color2 = dechex(rand(0x000000, 0xFFFFFF));
    for ($j = $i; $j < $h; $j++) {
        echo "<span style='color:$color1; padding:3px;'>&nbsp;&nbsp;</span>";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--) {
        echo "<span style='color:$color2; padding:3px;'>$star</span>";
    }
    echo "<br>";
}
for ($i = $h; $i > 0; $i--) {
    $color3 = dechex(rand(0x000000, 0xFFFFFF));
    $color4 = dechex(rand(0x000000, 0xFFFFFF));
    for ($j = $h - $i; $j > 0; $j--) {
        echo "<span style='color:$color3; padding:3px;'>&nbsp;&nbsp;</span>";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--) {
        echo "<span style='color:$color4; padding:3px;'>$star</span>";
    }
    echo "<br>";
}
echo '<br><br>';


//UZDUOTIS #9
//Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
//$c = "10 bezdzioniu \n suvalge 20 bananu.";
//Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
//$c = '10 bezdzioniu \n suvalge 20 bananu.';
//(Stringas viengubose ir dvigubose kabutėse)
echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #9' . '<br>';
echo '<br>';

$timeStart = microtime(true);
$c = "10 bezdzioniu \n suvalge 20 bananu.";
for ($i = 0; $i < 1000000; $i++) {
    $c;
}
$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;

echo '<br>' . "dvigubu kabuciu laikas: $time" . '<br>';

$timeStart = microtime(true);
$c = '10 bezdzioniu \n suvalge 20 bananu.';
for ($i = 0; $i < 1000000; $i++) {
    $c;
}
$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;

echo '<br>' . "viengubu kabuciu laikas: $time" . '<br>';
echo '<br><br>';

echo '-----------------------------';
echo '<br>';
echo 'UZDUOTIS #10' . '<br>';
echo '<br>';


//UZDUOTIS #10
// Sumodeliuokite vinies kalimą. 
// Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. 
// Vinies ilgis 8.5cm (pilnai sulenda į lentą).
//“Įkalkite” 5 vinis mažais smūgiais. 
// Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
//“Įkalkite” 5 vinis dideliais smūgiais. 
// Vienas smūgis vinį įkala 20-30 mm, 
// bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), 
// kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.

$nail = 85;
$viniuSkaicius = 5;
$smugiuSkaicius = 0;

for ($i = 0; $i < $viniuSkaicius; $i++) {
    $remainingNail = 0;
    while ($remainingNail < 85) {
        $hammer = rand(5, 20);
        echo $hammer . '  |  ';
        $remainingNail += $hammer;
        $smugiuSkaicius++;
    }
    $x = $i + 1;
    echo "Prireike $smugiuSkaicius  smugiu.";
    echo '<br>';
    $smugiuSkaicius = 0;
}
echo '<br><br>';
