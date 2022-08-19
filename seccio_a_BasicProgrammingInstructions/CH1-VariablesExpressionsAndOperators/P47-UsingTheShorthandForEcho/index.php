<?php

  $nom = 'David';
  $llenguatges = ['PHP', 'JS', 'Dart'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Llenguatges de programacio</title>
</head>

<body>
  <h1>David Castelló DEV - practica echo i foreach loop</h1>
  <h3>Llenguatges de Programacio d'en <?= $nom ?></h3>
  <ol>
    <?php foreach($llenguatges as $llenguatge){ ?>
    <li>Nom del llenguatge: <?= $llenguatge ?> </li>
    <?php }?>
  </ol>


</body>

</html>