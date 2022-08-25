<?php
  $usuari = 'David';

  $salutacio = 'Bon dia, ' . $usuari;

  $producteOferta = [
    'producte' => 'Xocolata',
    'quantitat' => 5,
    'preu' => 5,
    'preuOferta' => 4,
  ];

  $totalNormal = $producteOferta['quantitat'] * $producteOferta['preu'];
  $totalOferta = $producteOferta['quantitat'] * $producteOferta['preuOferta'];

  $totalDescompte = $totalNormal - $totalOferta;
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resum Capitol 1 - Variables, Expresions i Operaadors en PHP</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h2><?= $salutacio ?></h2>

  <h3>Estalvi d'Avui: <?= $totalDescompte ?></h3>
  <p>Compra <?= $producteOferta['quantitat'] ?> al preu de 4</p>
</body>

</html>