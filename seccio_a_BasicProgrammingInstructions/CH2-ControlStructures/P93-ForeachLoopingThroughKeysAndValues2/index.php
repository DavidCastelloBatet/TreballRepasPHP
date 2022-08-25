<?php

  $top_gelats = ['Xocolata', 'Maduixa', 'Nata', 'Vainilla'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Each index</title>
</head>
<body>
  <h1>La Botiga de llaminadures</h1>
  <h3>Top Rated !!!</h3>
  <ol>
    <?php foreach($top_gelats as $gelat){?>
      <li>Nom del gelat: <?= $gelat ?></li>
    <?php } ?>
  </ol>
</body>
</html>