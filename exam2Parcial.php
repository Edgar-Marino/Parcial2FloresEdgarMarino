<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<<?php 
$Telefonos = array(
    "Oppo Honor" => 2000,
    "Iphone 16" => 16000,
    "Samsung" => 11000,
    "Huawei" => 1000,
    "Nokia" => 5000,
);

echo "Lista inicial de Telefonos:<br>";
foreach ($Telefonos as $nombre => $precio) {
    echo "$nombre: $$precio<br>";
}

$Telefonos["Oxxo CEL"] = 300;
$Telefonos["Super Cel"] = 500;

echo "<br>Lista después de agregar y ordenar:<br>";
asort($Telefonos);

foreach (Telefonos as $nombre => $precio) {
    echo "$nombre: $$precio<br>";
}


 ?>

</body>
</html>
