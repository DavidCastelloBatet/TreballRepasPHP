<?php

  $stock = 0;

  $missatge = ($stock > 0) ?
    '<p style = "color: green;">Material en stock</p>' :
    '<p style = "color: red;">Material fora d\'stock</p>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operador Ternari</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h2>Producte: Xocolata</h2>
  <h3><?= $missatge ?></h3>
</body>

</html>