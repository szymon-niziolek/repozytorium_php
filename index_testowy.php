<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Hello, world!</h1>
<?php

/*
$nazwa_zmiennej = "tekst_przykladowy";
$nazwa_zmiennej_dwa = "tekst_drugi";
$suma = $nazwa_zmiennej . $nazwa_zmiennej_dwa;
// echo "<h2>" . $suma . "</h2>";
$typ_zmiennej_a = gettype($nazwa_zmiennej);
// define(argument1,argument2);
// define("adres_URL","localhost");
// echo adres_URL;
// $number = 4;
// var_dump($number);
// die();
// $dec = 1;
// var_dump($dec);
// $neg = -1;
// var_dump($neg);
// $octa = 0123;
// var_dump($octa);
// $tak_lub_nie = false;
// var_dump($tak_lub_nie);
$miasto_wroclaw = "wrocław";
$miasto_cracow = "kraków";
$miasto_kato = "katowice";
$miasta = array("wrocław","kraków","katowice");
// rosnaco
sort($miasta);
// malejaco
// rsort($miasta);  
// var_dump($miasta);
// $miasta[0] = "Wrocław po zmianach";
// $miasta[1] = "Kraków bez smogu";
// var_dump($miasta[0]);
// var_dump($miasta[1]);
// tablice asocjacyjne
$ludzie = array("Albert"=>24,"Józef"=>78,"Maciek"=>13);
$ludzie["Albert"] = 45;
ksort($ludzie);
var_dump ($ludzie);
$budynek_ulica = array(
    "weglokoks"=>"Mickiewicza 29",
    "Inny budynek"=>"inny adres"
);
// var_dump($budynek_ulica);
// echo $budynek_ulica["weglokoks"];
// talica wielowymiarow
$ludzie = array(
    array(
        "imie" => "Zbyszek",
        "wiek" => 34
    ),
    array(
        "imie" => "Alojzy",
        "wiek" => 102
    ),
    array(
        "imie" => "Grażyna",
        "wiek" => 55
    ),
    array(
        "imie" => "Janusz",
        "wiek" => 99
    ),
);
// var_dump($ludzie[0]["imie"]);
// echo "Pan " . $ludzie[1]["imie"] . " ma lat: " . $ludzie[1]["wiek"];
$kraje = array(
    "Polska" =>array(
        'PKB' => '469,5 miliarda',
        'ludnosc' => 37.95
    ),
    "Usa" =>array(
        'PKB' => '18,57 tryliardow',
        'ludnosc' => 325.7
    ),
    "Kongo" =>array(
        'PKB' => '7,834 miliarda',
        'ludnosc' => 5.126
    ),
    "Szwajcaria" =>array(
        'PKB' => '659,8 miliarda ',
        'ludnosc' => 8.37
    )
);
$obiekty = array(
    'budynki' => array (
        array (
            'nazwa' => 'Weglokoks',
            'pietra' => 23
            'wybudowano' => true
        ),
        array (
            'nazwa' => 'cos innego',
            'pietra' => 23
            'wybudowano' => false
        )
      
        ),
        'galerie' => array (
            array (
                'nazwa' => 'katowicka',
                'pietra' => 23
                'wybudowano' => true
            ),
            array (
                'nazwa' => 'supersam',
                'pietra' => 23
                'wybudowano' => false
        )   
     )
 );  



// PETLE ---------------------------------------------------------

/*
for (
argument 1 - deklaracja zmiennej licznikowej;
argument 2 - warunek podczas ktorego pela sie wykonuje;

argument 3 - wzrost/ zmniejszanie sie zmiennej licznikowej) {
    tresc petli wykonywane po spelnieniu argumentow
}
*/

/*

for( $i=0; $i < 10; $i++) {
    echo $i . "<br>";
}

// while wykonuje sie tyle razy 

$i = 0;
while( $i<= 10) {
    // echo "test" . "<br>";
    $i++;
}


// do wypisuje elementy do momentu gdy warunek
// ptrzestanie byc prawdziwy

$i = 0;
do {
    echo $i;
    $i++;
} while ( $i <= 10);

// foreach dedykowany dla zwyklych tablic

foreach ($tablica as $element_tablicy) {
    echo $element_tablicy;
}

// foreach dedykowany dla tablic asocjacyjnych

foreach ($tablica as $klucz/element_tablicy => $wartość) {
    echo $klucz;
    echo $wartość;
}  */


// echo $obiekty["budynki"][0]["nazwa"];
// if ($kraje["Polska"]["ludnosc"] === 37.95) {
//     echo "ludnosc wynosi " . $kraje["Polska"]["ludnosc"] . "<br>";
// } else {
//     echo "cos poszlo nie tak";
// }
// if ($kraje["Polska"]["ludnosc"] > 10) {
//     echo "ludnosc w Polsce jest większa od 10";
// } else {
//     echo "ludnosc jest mniejsza od 10";
// }
// echo ($kraje['Kongo']['PKB']);  
$x = 7;
$y = 3;
// $x = $x + $y;
// $x += $y;
 
$x %= $y; 
// echo $x;
$d = 20;
$b = 10;
// var_dump($d == $b);
// var_dump($d === $b);
// ++$a Preinkrementacja    Zwiększa $a o jeden, a następnie zwraca $a.
// $a++ Postinkrementacja   Zwraca $a, a następnie zwiększa $a o jeden.
// --$a Predekrementacja    Zmniejsza $a o jeden, po czym zwraca $a.
// $a-- Postdekrementacja   Zwraca $a, po czym zmniejsza $a o jeden.
// $a = 1;
// echo $a++;
// $str = 'tekst1';
// $str_two = 'tekst2';
// $str = $str . $str_two;
// echo $str . "<br>";
// $str .= $str_two;
// echo $str . "<br>";
// wywolanie zmiennej z pomienieciem błedów
// @zmienna
// $zmienna = "tekst";
// if ($zmienna == 'tekst') {
//     echo "ok";
// } else {
//     echo "nie ok";
// }

// tablica indexowa
// $miasta = array("wrocław","kraków","katowice");
// $liczby = array(3,7,10,1);

// // tablica assocjacyjna
// $ludzie = array("Albert"=>24,"Józef"=>78,"Maciek"=>13);

// $count = count($miasta);
// echo $count;
// for ($i=0; $i < $count; $i++) {
//     echo $miasta[$i] . "<br>";
// }

// foreach ($ludzie as $klucz => $wartosc) {
//     echo $klucz . "   " . $wartosc . "<br>";
// }

// funkcje


$budynki = array (
        array (
            'nazwa' => 'Weglokoks',
            'pietra' => 23,
            'wybudowano' => true
        ),
        array (
            'nazwa' => 'cos innego',
            'pietra' => 23,
            'wybudowano' => false
        )
     ); 

function wypisz_nazwe_budynku ( $tablica){
    foreach ($tablica as $budynek) {
        if ($budynek[ 'wybudowano'] == true) {
            echo $budynek ['nazwa'] . "<br>";
        }
    }
}

wypisz_nazwe_budynku($budynki)
 /* ?>
<h3>czesc tego nie bedzie widac</h3>
<h3>czesc tego nie bedzie widac</h3>
<h3>czesc tego nie bedzie widac</h3>
<h3>czesc tego nie bedzie widac</h3>
<?php */ ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>