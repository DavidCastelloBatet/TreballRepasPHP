<?php

  $producte = 'chocolata';
  $stock = 25;

  $quantitat_demanada = 8;

  $podem_servir = ($quantitat_demanada <= $stock) ? 'Si, stock suficient.' : 'NO, stock insuficient. ';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>David Castello DEVC - PHP Operadors de Comparació</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h5>Producte</h5>
  <p>Producte demanat: <?= $producte ?>.</p>
  <p>Quantitat en Stock: <?= $stock ?> unitats.</p>
  <h5>Comanda</h5>
  <p>Quantitat demanada: <?= $quantitat_demanada ?> unitats.</p>
  <p>Podem Servir ? <?= $podem_servir ?></p>


</body>

</html>