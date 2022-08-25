<?php

declare(strict_types=1);

class Compte
{
  # Constructor modern PHP 8
  public function __construct(
    public int $numero_compte,
    public string $tipus_compte,
    protected float $saldo,
  ) {
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

  public function getSaldo(): float
  {
    return $this->saldo;
  }
}

$compte_david = new Compte(12345, 'Estalvis', 100.00);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Client: David Castelló dev & data</h1>
  <h2>Compte: <?= $compte_david->numero_compte ?> Tipus: <?= $compte_david->tipus_compte ?></h2>
  <p>Saldo Inicial: <?= $compte_david->getSaldo() ?>€</p>
  <p>Saldo Final: <?= $compte_david->diposit(50.00) ?>€</p>
</body>

</html>