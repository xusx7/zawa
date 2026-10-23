
<?php
const VAT = 0.23;

$nazwa = "Klawiatura";
$cenaNetto = 100;
$ilosc = 3;

$cenaBrutto = $cenaNetto * (1 + VAT);
$wartoscBrutto = $cenaBrutto * $ilosc;

echo "
<table border=1>;
    <tr>
        <th>Nazwa</th>
        <th>Netto</th>
        <th>Butto</th>
        <th>Ilosc</th>
        <th>Wartosc</th>
    </tr>


    <tr>
        <td>$nazwa</td>
        <td>" . number_format($cenaNetto, 2, ',', ' ') . " zl</td>

        <td>" . number_format($cenaBrutto, 2, ',', ' ') . " zl</td>
        <td>$ilosc</td>
        <td>" . number_format($wartoscBrutto, 2, ',', ' ') . " zl</td>
    </tr>
</table>
";
?>


