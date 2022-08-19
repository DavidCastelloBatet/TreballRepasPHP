<?php
  # Calcular factura serveis
  # Variables
  $iva = 12;
  $preu_hora = 10;
  $hores_treballades = 20;

  # calculs de la factura
  $taxa_iva = $iva / 100;
  $subtotal = $hores_treballades * $preu_hora;
  $iva_final =  $subtotal * $taxa_iva;
  $total = $subtotal + $iva_final;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operacions aritmetiques</title>
</head>

<body>
  <h1>David Castelló DEV</h1>
  <h3>Factura Serveis</h3>
  <h5>Conceptes:</h5>
  <p>Hores treballades: <?= $hores_treballades ?> hores</p>
  <p>Preu hora treballada: <?= $preu_hora ?> €</p>
  <h5>Calculs:</h5>
  <p>Subtotal (hores x preu/hora): <?= $subtotal ?> €</p>
  <p>IVA (12% de <?= $subtotal ?>): <?= $iva_final ?> €</p>
  <h4>Total (Subtotal + <?= $iva ?>% d'IVA): <?= $total ?> €</h4>
</body>

</html>