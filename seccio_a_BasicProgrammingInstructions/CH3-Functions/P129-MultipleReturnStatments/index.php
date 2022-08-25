<?php 

  $stock = 9;

  function get_stock_misatge($stock)
  {
    if($stock > 10){
      return 'Anem sobrats d\'stock';
    }

    if($stock>=0 && $stock<=10){
      return "Ull, solament queden $stock unitats. Comprar ja!";
    }
    return 'Producte fora d\'stock';
  }

  $missatge = get_stock_misatge($stock);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Varis retorns condicionals</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h3>Producte: Xocolata</h3>
  <p><?= $missatge ?></p>
</body>

</html>