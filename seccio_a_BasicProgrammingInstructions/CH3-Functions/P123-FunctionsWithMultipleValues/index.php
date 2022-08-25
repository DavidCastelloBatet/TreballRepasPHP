<?php

  $us_dollar_preu_xocolata = 4;

  $tasa_conversio = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
  ];

  function calcular_preu_al_canvi($us_dollar_preu_xocolata, $tasa_conversio)
  {
    $preu_al_canvi = [
      'lliura' => $us_dollar_preu_xocolata * $tasa_conversio['uk'],
      'euro' => $us_dollar_preu_xocolata * $tasa_conversio['eu'],
      'yen' => $us_dollar_preu_xocolata * $tasa_conversio['jp'],
    ];
    return $preu_al_canvi;
  }

  $preus_globals = calcular_preu_al_canvi($us_dollar_preu_xocolata, $tasa_conversio);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retorn multiple</title>
</head>

<body>
  <h1>David Castello Dev&Data</h1>
</body>

<h2>Article: Xocolata</h2>

<h3>Preu unitat en dolars : <?= $us_dollar_preu_xocolata ?></h3>
<p>Preu en &pound; UK : <?= $preus_globals['lliura'] ?></p>
<p>Preu en &euro; EU : <?= $preus_globals['euro'] ?></p>
<p>Preu en &yen; JP : <?= $preus_globals['yen'] ?></p>

</html>