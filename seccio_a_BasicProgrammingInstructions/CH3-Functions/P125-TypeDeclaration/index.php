<?php

  $preu = 10.2;
  $quantitat = 10;
  
  # :int  indica el tipus de retorn pero no afecta al funcionament
  # per q realment afecti s'ha de declarar en modo estricte
  function calcular_preu_total($preu, $quantitat): int
  {
    return $preu * $quantitat;
  }

  $preu_total = calcular_preu_total($preu, $quantitat);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retorn amb parametres tipats</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h3>Article: Xocolata</h3>
  <p>Preu: <?= $preu_total ?>€ </p>
</body>

</html>