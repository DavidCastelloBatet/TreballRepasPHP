<?php

  $nomUsuari = 'David';
  $salutacio = 'Hola Usuari';

  if(!$nomUsuari == '') {
    $salutacio = 'Benvingut, ' . $nomUsuari;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IF Statement</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h2><?= $salutacio ?></h2>
</body>

</html>