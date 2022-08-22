<?php

  $stock_actual = 0;
  $comanda_feta = 3;

if($stock_actual > 0){
$missatge = '<p style="color:green;">Producte disponible</p>';
} elseif($comanda_feta > 0){
$missatge = '<span style=color:orange;">Arriven </span>' . $comanda_feta . '<span style=color:orange;">
  unitats</span>';
} else{
$missatge = '<p style="color:red;">Producte fora d\'stock</p>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If ElseIf</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h2>Xocolata</h2>
  <p><?= $missatge ?></p>

</body>

</html>