<?php

  $contador = 1;
  $taula = 2;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>while loop</title>
</head>

<body>
  <h1>Taules de multiplicar</h1>
  <h3>Taula de Multiplicar: <?= $taula ?></h3>
  <?php

    while ($contador <= 10) {
      echo $taula;
      echo ' * ';
      echo $contador;
      echo ' = ';
      echo $taula * $contador;
      echo '<br>';
      $contador++;
    }

  ?>
</body>

</html>