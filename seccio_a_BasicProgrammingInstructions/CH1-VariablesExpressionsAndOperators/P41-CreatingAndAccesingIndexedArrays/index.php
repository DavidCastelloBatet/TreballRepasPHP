<?php

  $fruites = ['poma', 'pera', 'mandarina', 'sindria', 'melo'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fruita del dia</title>
</head>

<body>
  <h1>La Fruitería</h1>
  <h3>Fruita del dia</h3>
  <ol>
    <li><?php echo $fruites[0]?></li>
    <li><?php echo $fruites[1]?></li>
    <li><?php echo $fruites[2]?></li>
    <li><?php echo $fruites[3]?></li>
    <li><?php echo $fruites[4]?></li>
  </ol>
</body>

</html>