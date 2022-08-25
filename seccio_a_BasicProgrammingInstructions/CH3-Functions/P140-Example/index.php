<?php

  declare(strict_types = 1);

  $gelats = [
    'nata' => ['preu' => 3.00, 'stock' => 12],
    'maduixa' => ['preu'=> 2.00, 'stock' => 26],
    'vainilla' => ['preu' => 4.00, 'stock' => 8]
  ];

  function get_missatge_fer_comanda(int $stock): string
  {
    return ($stock <= 10)  ? 'Fer Comanda Urgent' : 'No';
    
  }

  function get_preu_total(float $preu, int $stock): float
  {
    return $preu * $stock;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projecte Inventari</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h3>Control d'stock</h3>
  <table class="table">
    <tr>
      <th>Gelat</th>
      <th>Stock</th>
      <th>Fer Comanda</th>
      <th>Valor Total</th>
    </tr>
    <?php foreach($gelats as $gelat => $dades){?>
    <tr>
      <td><?= $gelat ?></td>
      <td><?= $dades['stock'] ?> unitats</td>
      <td><?= get_missatge_fer_comanda($dades['stock']) ?></td>
      <td><?= get_preu_total(stock: $dades['stock'], preu: $dades['preu'] )?></td>
    </tr>
    <?php } ?>
  </table>

</body>

</html>