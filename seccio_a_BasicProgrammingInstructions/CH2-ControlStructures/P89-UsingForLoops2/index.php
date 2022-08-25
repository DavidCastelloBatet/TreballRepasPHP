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
  <h3>Preus Projectes grans</h3>
  <tr>
    <?php for ($i= 10; $i <= 100; $i = $i + 10){ ?>
    <td>Hora <?= $i ?>: <?= $i * $preu ?>€</td><br>
    <?php } ?>
  </tr>

</body>

</html>