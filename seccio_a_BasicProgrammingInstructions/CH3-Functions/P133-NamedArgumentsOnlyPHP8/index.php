<?php

  function calcular_cost($preu_unitat, $unitats, $descompte = 0, $iva = 20){

    $subtotal = $preu_unitat * $unitats;
    $taxes = $subtotal * $iva / 100;
    

    return $subtotal + $taxes - $descompte;

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parametres per defecte</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h3>Xocolata</h3>
  <p>Xocolata blanca: <?= calcular_cost(unitats: 10, preu_unitat: 5) ?>€</p>
  <p>Xocolata negra: <?= calcular_cost(unitats: 10, preu_unitat: 10, descompte: 5, iva: 10) ?>€</p>
  <p>Xocolata amb llet : <?= calcular_cost(10,10, 20) ?>€</p>
</body>

</html>