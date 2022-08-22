<?php

  # usuari
  $nom_usuari = 'David';

  # missatge de benvinguda
  $missatge = ($nom_usuari) ? "Hola $nom_usuari" : 'Hola usuari, registrat!';

  #fitxa producte
  $producte = 'xocolata';
  $cost = 2;

  # array amb totals
  for($i = 1; $i <= 10; $i++){
    $subtotal = $cost * $i;
    $descompte = ($subtotal / 100) * ($i * 4);
    $total[$i] = $subtotal - $descompte;
  }


?>

<?php include '../includes/header.php' ?>

<h3><?= $missatge ?></h3>

<table>
  <tr>
    <th>Paquets</th><th>Preu</th>
  </tr>
  <?php foreach($total as $quantitat => $preu){?>
    <tr>
      <td><?= $quantitat ?> pack<?= ($quantitat === 1) ? '' : 's'; ?></td>
      <td><?= $preu ?> €</td>
    </tr>
  <?php }?>
</table>

<?php include '../includes/footer.php' ?>