<?php

  $preu = 10;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Loop</title>
</head>

<body>
  <h1>David Castelló DEV & Data</h1>
  <h3>Preus Hora Treballada</h3>
  <?php for ($i= 1; $i <= 10; $i++){ ?>
  <p>Hora <?= $i ?>: <?= $i * $preu ?>€</p>
  <?php } ?>
</body>

</html>