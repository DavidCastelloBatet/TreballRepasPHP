<?php

  $taxes = '21';

  function calcular_preu_total($cost, $quantitat)
  {
    $sub_total = $cost * $quantitat;
    $taxes = ($sub_total * 21) / 100;
    $total = $sub_total + $taxes;
    echo '(variable $taxes scope local) : ';
    return $total;
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
    <li>Xocolata <?= calcular_preu_total(6,19) ?>€ </li>
    <li>Madalenes <?= calcular_preu_total(75,1) ?>€ </li>
  </ul>

  <p>Taxa (variable $taxes scope global) : <?= $taxes ?></p>
</body>

</html>