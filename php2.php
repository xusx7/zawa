<?php
require "php1.php";

$suma = 0;         
$brakuje = 0;      
$najdrozszy = null; 

foreach ($produkty as $p) {

    $suma += $p["cena"] * $p["ilosc"];

    if ($p["ilosc"] === 0) {
        $brakuje++;
    }


    if ($najdrozszy === null || $p["cena"] > $najdrozszy["cena"]) {
        $najdrozszy = $p;
    }
}

$szukane = "Kabel HDMI 2m";
$znaleziony = null;

foreach ($produkty as $p) {
    if ($p["nazwa"] == $szukane) {
        $znaleziony = $p;
        break;
    }
}

echo "Wartość magazynu: "
    . number_format($suma, 2, ',', ' ')
    . " zł<br>";

echo "Niedostępne produkty: "
    . $brakuje
    . "<br>";

echo "Najdroższy produkt: "
    . $najdrozszy["nazwa"]
    . " ("
    . number_format($najdrozszy["cena"], 2, ',', ' ')
    . " zł)<br>";

if ($znaleziony === null) {
    echo "Nie znaleziono produktu";
} else {
    echo "Znaleziono: " . $znaleziony["nazwa"];
}


?>
