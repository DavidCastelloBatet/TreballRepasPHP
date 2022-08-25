<?php

  $nom = 'David';
  $cognom = 'Castelló';
  $nom_complert = $nom . ' ' . $cognom;
  $missatge = 'Benvingut, ' . $nom_complert;

  $edat = 49;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concatenar strings</title>
</head>

<body>
  <h1>David Castelló DEV - PHP Concatenar Strings</h1>
  <h5>Missatge: <?= $missatge ?></h5>
  <h3>Fitxa:</h3>
  <p>Nom Complert: <?= $nom_complert?></p>
  <p>Edat: <?= $edat ?> anys.</p>
</body>

</html>