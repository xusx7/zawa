Usunięto kategorię z danych produktów, podsumowania i tabeli.

````php
<?php

$produkty = [
    ['id' => 1,  'nazwa' => 'Laptop Lenovo',      'cena' => 3499.99, 'stan' => 5],
    ['id' => 2,  'nazwa' => 'Mysz Logitech',      'cena' => 89.99,   'stan' => 30],
    ['id' => 3,  'nazwa' => 'Klawiatura Redragon','cena' => 199.99,  'stan' => 15],
    ['id' => 4,  'nazwa' => 'Koszulka Basic',     'cena' => 49.99,   'stan' => 50],
    ['id' => 5,  'nazwa' => 'Bluza Sport',        'cena' => 129.99,  'stan' => 20],
    ['id' => 6,  'nazwa' => 'Ksiazka PHP',        'cena' => 79.99,   'stan' => 40],
    ['id' => 7,  'nazwa' => 'Ksiazka JavaScript', 'cena' => 69.99,   'stan' => 35],
    ['id' => 8,  'nazwa' => 'Monitor Samsung',    'cena' => 999.99,  'stan' => 10],
    ['id' => 9,  'nazwa' => 'Buty Running',       'cena' => 299.99,  'stan' => 12],
    ['id' => 10, 'nazwa' => 'Powerbank',          'cena' => 149.99,  'stan' => 25],
    ['id' => 11, 'nazwa' => 'E-book Reader',      'cena' => 599.99,  'stan' => 12],
];

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Katalog produktów</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table {
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px 10px;
        }
    </style>
</head>
<body>

<?php

$posortowane = $produkty;

usort($posortowane, function($a, $b) {
    return $a['cena'] <=> $b['cena'];
});

$ceny = array_column($produkty, 'cena');

$liczbaProduktow = count($produkty);
$sredniaCena = array_sum($ceny) / count($ceny);
$maxCena = max($ceny);
$minCena = min($ceny);

echo "<h1>Katalog produktów</h1>";

echo "<p><strong>Liczba produktów:</strong> $liczbaProduktow</p>";
echo "<p><strong>Średnia cena:</strong> " . number_format($sredniaCena, 2) . " zł</p>";
echo "<p><strong>Najwyższa cena:</strong> $maxCena zł</p>";
echo "<p><strong>Najniższa cena:</strong> $minCena zł</p>";

echo "<table>";
echo "<tr>
        <th>ID</th>
        <th>Nazwa</th>
        <th>Cena</th>
        <th>Stan</th>
      </tr>";

foreach ($posortowane as $produkt) {
    echo "<tr>
            <td>{$produkt['id']}</td>
            <td>{$produkt['nazwa']}</td>
            <td>{$produkt['cena']}</td>
            <td>{$produkt['stan']}</td>
          </tr>";
}

echo "</table>";

?>
</body>
</html>
````