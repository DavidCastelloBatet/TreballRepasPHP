<?php

  $taxes = '20';

  function calcular_preu_total($cost, $quantitat)
  {
    global $taxes;
    static $total_acumulat = 0;
    $sub_total = $cost * $quantitat;
    $quota_iva = ($sub_total * $taxes) / 100;
    $total = $sub_total + $quota_iva;
    $total_acumulat = $total_acumulat + $total;
    return $total_acumulat;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcions amb parametres</title>
</head>

<body>
  <h1>La Botiga de llaminadures</h1>
  <h3>Llista d'articles comprats</h3>
  <ul>
    <li>Gelats <?= calcular_preu_total(5,20) ?>€ </li>
    <li>Xocolata <?= calcular_preu_total(5,20) ?>€ </li>
    <li>Madalenes <?= calcular_preu_total(5,20) ?>€ </li>
  </ul>

</body>

</html>