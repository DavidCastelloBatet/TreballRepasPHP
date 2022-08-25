<?php

  $dia = 'Divendres';

  # Comparativa d'us de switch i match(PHP8)
  # switch
  switch ($dia) {
    case 'Dilluns':
      $missatge = '10% de descompte Xoculata amb Llet';
      break;
    case 'Divendres':
      $missatge = 'Dia sense IVA';
      break;
    default:
      $missatge = 'Xocolata amb Xurros i bona companyia!';
      break;
  }

  # match
  $missatge2 = match($dia){
    'Dilluns' => 'Avui es dilluns',
    'Divendres' => 'Por fin es Viernes',
    default => 'Booooooringgg...',
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch PHP</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h2>Dia de la setmana: <?= $dia ?></h2>
  <h3>Oferta del dia: <span style="color:green;"> <?= $missatge ?> </span></h3>
  <h3>Missatge del dia: <span style="color:green;"> <?= $missatge2 ?> </span></h3>
</body>

</html>