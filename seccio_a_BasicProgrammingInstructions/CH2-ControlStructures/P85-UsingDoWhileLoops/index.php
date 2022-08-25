<?php

  $packs = 5;
  $price = 1.99;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do While</title>
</head>

<body>
  <h1>Prices for Multiple Packs</h1>
  <?php

    do{
      echo '<p>';
      echo $packs;
      echo ' packs cost $';
      echo $price * $packs;
      echo '</p>';
      $packs--;
    } while ($packs > 0);

  ?>
</body>

</html>