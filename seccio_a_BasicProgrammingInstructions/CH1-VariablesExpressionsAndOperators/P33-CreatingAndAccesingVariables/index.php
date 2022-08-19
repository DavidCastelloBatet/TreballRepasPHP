<?php 
  $nom = 'David';
  $preu = 5;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h3>Benvingut de nou, <?php echo $nom ?> !</h3>
  <p>El preu de cada paquet de llaminadures es de <?php echo $preu ?>€ </p>
</body>

</html>