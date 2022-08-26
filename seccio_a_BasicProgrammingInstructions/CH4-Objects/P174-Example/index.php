<?php

include('Compte.php');
include('Client.php');

$comptesDavid = [
  new Compte(12345, 'Diari', -100.00),
  new Compte(67890, 'Estalvi', 1000.08),
  new Compte(5, 'Diari', -1000.77),
  new Compte(456, 'Estalvi', 300.90),
  new Compte(6788, 'Estalvi', 1000.45),
];

$david = new Client('Castello', 'David', 'david@david.com', '123000', $comptesDavid);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemple treball objectes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <h1>David Castello dev & data</h1>
  <h2>Client: <?= $david->getNomComplert() ?></h2>
  <table class="table table-striped">
    <tr>
      <th>Numero de Compte</th>
      <th>Tipus de Compte</th>
      <th>Saldo</th>
    </tr>
    <?php foreach ($david->comptes as $compte) { ?>
      <tr>
        <td><?= $compte->numero_compte ?></td>
        <td><?= $compte->tipus_compte ?></td>
        <?php if ($compte->getSaldo() <= 0) { ?>
          <td style="color: red;">
          <?php } else { ?>
          <td>
          <?php } ?>
          <?= number_format($compte->getSaldo(), 2) ?>€</td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>