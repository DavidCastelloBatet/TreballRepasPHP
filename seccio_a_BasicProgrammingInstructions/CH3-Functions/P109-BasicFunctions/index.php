<?php

  function dibuixa_logo()
  {
    echo '<img src="../img/logo.png" alt="Logo" title="logo" height="200px">';
  }

  function escriu_copyright()
  {
    $year = date('Y');
    echo "&copy; $year";
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
    <h1><?php dibuixa_logo() ?> David Castelló DEV & Data</h1>
  </head>

  <main>
    <p>Hola que tal</p>
  </main>

  <footer>
    <p><?php escriu_copyright() ?></p>
  </footer>
</body>

</html>