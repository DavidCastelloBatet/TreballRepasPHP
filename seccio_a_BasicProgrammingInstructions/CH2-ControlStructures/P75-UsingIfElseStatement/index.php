<?php

  $stock = 0;

  if($stock > 0){
    $missatge = 'Producte disponible';
  } else {
    $missatge = 'Fora d\'stock';
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IF Else</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h2>Producte: Xocolata</h2>
  <p>Disponibilitat: <?= $missatge ?> </p>
</body>

</html>