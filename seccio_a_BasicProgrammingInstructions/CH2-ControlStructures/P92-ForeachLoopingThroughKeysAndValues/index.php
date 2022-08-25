<?php

  $gelats = [
    'Xocolata' => 1.5,
    'Nata' => 1.4,
    'Maduixa' => 1.5,
    'Vainilla' => 1.3,
  ]

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>For Each keys values</title>
</head>

<body>
  <h1>La Botiga de Llaminadures</h1>
  <h3>Llista de preus</h3>
  <table class="table table-striped table-danger">
    <tr>
      <th>Gelat</th>
      <th>Preu</th>
    </tr>
    <?php foreach($gelats as $gelat => $preu){?>
    <tr>
      <td><?= $gelat ?></td>
      <td><?= $preu ?></td>
    </tr>
    <?php } ?>
  </table>
</body>

</html>