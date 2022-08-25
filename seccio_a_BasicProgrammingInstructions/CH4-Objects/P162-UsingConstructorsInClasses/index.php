<?php

declare(strict_types=1);
class Compte
{
  public int $numero_compte;
  public string $tipus_compte;
  public float $saldo;

  public function __construct(int $numero_compte, string $tipus_compte, float $saldo = 0)
  {
    $this->numero_compte = $numero_compte;
    $this->tipus_compte = $tipus_compte;
    $this->saldo = $saldo;
  }

  public function diposit(float $diners_dipositats): float
  {
    $this->saldo = $this->saldo + $diners_dipositats;
    return $this->saldo;
  }

  public function retirar($diners_retirats): float
  {
    $this->saldo = $this->saldo - $diners_retirats;
    return $this->saldo;
  }
}

# Instanciar classe
$estalvis = new Compte(12345, 'Estalvis', 5000.00);
$corrent = new Compte(67890, 'Corrent', 350.00);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear constructor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <h1>Client: David Castelló dev & data</h1>
  <h3>Extracte bancari
    <table class="table">
      <tr>
        <th>Dia</th>
        <th><?= $estalvis->tipus_compte ?></th>
        <th><?= $corrent->tipus_compte ?></th>
      </tr>
      <tr>
        <td>Dia 1</td>
        <td><?= $estalvis->saldo ?>€</td>
        <td><?= $corrent->saldo ?>€</td>
      </tr>
      <tr>
        <td>Dia 2</td>
        <td><?= $estalvis->diposit(500.00) ?>€</td>
        <td><?= $corrent->retirar(50.00) ?>€</td>

      </tr>
      <tr>
        <td>Dia 3</td>
        <td><?= $estalvis->retirar(100.00) ?>€</td>
        <td><?= $corrent->diposit(100.00) ?>€</td>
      </tr>

    </table>

  </h3>

</body>

</html>