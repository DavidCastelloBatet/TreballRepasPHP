<?php

  function dibuixa_logo()
  {
    $logo = '<img src="../img/logo.png" alt="Logo" title="logo" height="200px">';
    return $logo;
  }

  function escriu_copyright()
  {
    $year = date('Y');
    $missatge = "&copy; David Castelló Dev&Data - $year";
    return $missatge;
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcions</title>
</head>

<body>

  <head>
    <h1><?= dibuixa_logo() ?> David Castelló Dev&Data</h1>
  </head>

  <main>
    <p>Hola que tal</p>
  </main>

  <footer>
    <p><?=  escriu_copyright() ?></p>
  </footer>
</body>

</html>