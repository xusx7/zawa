<?php

require_once "php1.php";

echo formatCena($cena);
echo "<BR>";
echo "<BR>";
echo formatCena(cenaBrutto($cena));
echo "<BR>";
echo "<BR>";
echo formatCena(cenaBrutto($cena, 0.08));
echo "<BR>";
echo "<BR>";
echo "Stan magazynu: " . StanMag(3);
echo "<BR>";
echo "Stan magazynu: " . StanMag(0);
echo "<BR>";
echo "Stan magazynu: " . StanMag(12);
echo "<BR>";
echo "<BR>";

echo "<table border='1'>";
echo "<tr><th>Produkt</th><th>Cena</th><th>Stan magazynu</th></tr>";

foreach(ProduktyNaMag($produkty) as $produkt){
    echo wiersztabeli($produkt);
}

echo "</table>";

echo "<BR>";
echo "<BR>";

$nazwa =" mysz ";
echo trim($nazwa);
echo "<BR>";
echo strlen ("Pamięć RAM");
echo "<BR>";
echo mb_strlen ("Pamięć RAM");
echo "<BR>";
echo strtoupper ("Pamięć RAM");
echo "<BR>";
echo str_contains("Pamięć RAM" , "Ram" );
echo "<BR>";
echo date("h:i:s d.m.y", time());

$tanie = array_filter($produkty, fn($produkt) => $produkt[1] < 1000);

?>