<?php

  $stock = 25;

  if ($stock >= 10) {
    $missatge = 'Bona disponibilitat';
  }

  if ($stock > 0 && $stock <= 10) {
    $missatge = 'Baixa disponibilitat - Fer comanda';
  }

  if ($stock <= 0) {
    $missatge = 'Producte sense stock!';
  }

?>

<?php include '../includes/header.php' ?>

<h2>Xocolata</h2>
<p><?= $missatge ?></p>


<?php include '../includes/footer.php' ?>