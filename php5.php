<?php

function formatCena(float $cena): string{

return number_format($cena, 2, ",", " ") . "zł";

}

function cenaBrutto(float $cenanetto, float $stawkaVat = 0.23): float{

return $cenanetto * (1 + $stawkaVat);

}

function StanMag(int $ilosc):string{

return match (true) {
    $ilosc === 0 => "Brak na magazynie",
    $ilosc < 5  => "Ostatnie sztuki",
    default => "Dostępny"
};

}

$produkty = [

["produkt 1", 1200.50, 3],
["produkt 2", 800, 0],
["produkt 3", 150.75, 10],

];

function ProduktyNaMag(array $produkty): array{

$ProduktyNaMag= [];

foreach($produkty as $produkt){

if($produkt[2] > 0)
    $ProduktyNaMag[]= $produkt;

}

return $ProduktyNaMag;

}

function wiersztabeli(array $produkt): string{

return "
<tr> 
<td> {$produkt[0]} </td>
<td>" . formatCena($produkt[1]) . "</td>
<td>" . StanMag($produkt[2]) . "</td>
</tr>
";

}

$cena = 1200.50;
?>