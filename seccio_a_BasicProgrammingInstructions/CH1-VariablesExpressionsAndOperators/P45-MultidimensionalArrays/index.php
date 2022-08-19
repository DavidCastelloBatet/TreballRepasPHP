<?php

  $treballadors = [
    ['nom' => 'David', 'projecte' => 'Flutter', 'salari' => 2000,],
    ['nom' => 'Pepito', 'projecte' => 'React', 'salari' => 1500,],
    ['nom' => 'Pepita', 'projecte' => 'PHP', 'salari' => 1500,],
    ['nom' => 'Pulgarcito', 'projecte' => 'Vue', 'salari' => 1500,],
    ['nom' => 'Pulgarcita', 'projecte' => 'Angular', 'salari' => 1500,],
  ]

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Llistat Treballadors</title>
</head>

<body>
  <h1>David Castelló DEV</h1>
  <h2>Llistat de Treballadors</h2>
  <!--amb for loop-->
  <h3>Versio amb for loop</h3>
  <?php for ($i = 0; $i < count($treballadors); $i++){ ?>

  <p>El <?php echo $treballadors[$i]['nom'] ?> participa al projecte <?php echo $treballadors[$i]['projecte'] ?> amb
    salari de <?php echo $treballadors[$i]['salari']; ?>.</p>

  <?php } ?>

  <!--hardcore-->
  <h3>Versio hardcoreada</h3>
  <p> <?php echo $treballadors[0]['nom'] ?> participa al projecte <?php echo $treballadors[0]['projecte'] ?> amb
    salari de <?php echo $treballadors[0]['salari']; ?>.</p>
  <p> <?php echo $treballadors[1]['nom'] ?> participa al projecte <?php echo $treballadors[1]['projecte'] ?> amb
    salari de <?php echo $treballadors[1]['salari']; ?>.</p>
  <p> <?php echo $treballadors[2]['nom'] ?> participa al projecte <?php echo $treballadors[2]['projecte'] ?> amb
    salari de <?php echo $treballadors[2]['salari']; ?>.</p>
</body>

</html>