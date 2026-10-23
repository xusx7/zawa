<?php

 const VAT = 0.23;

$netto = 800;
$brutto = $netto * (1+VAT);
$raty = $brutto / 10;
$potenga = 2**10;

$ilosc = 5;
$ilosc += 3;
$ilosc++;

$opis = "Procesor";
$opis .= " Ryzen 5";

echo "Produkt: $opis<br>";
echo 'Produkt: $opis<br>';
?>