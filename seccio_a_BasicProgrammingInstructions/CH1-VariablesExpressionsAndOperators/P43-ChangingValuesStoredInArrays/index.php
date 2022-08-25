<?php

  $nutricio = [
    'mantega' => 16,
    'sucre' => 6,
    'sal' => 7.3,
    'proteines' => 2.6,
  ];

  # Actualitzant / afegint  valors array asociatiu
  # Actualitzant
  $nutricio['mantega'] = 18;

  # Afegint
  $nutricio['fibra'] = 30;
  
  # var_dump($nutricio);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nutricio</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h3>Nutrició (per 100gr.)</h3>
  <p>Mantega: <?= $nutricio['mantega']; ?>%</p>
  <p>Sucre: <?= $nutricio['sucre']; ?>%</p>
  <p>Sal: <?= $nutricio['sal']; ?>%</p>
  <p>Proteïnes: <?= $nutricio['proteines']; ?>%</p>
  <p>Fibra: <?= $nutricio['fibra']; ?>%</p>
</body>

</html>