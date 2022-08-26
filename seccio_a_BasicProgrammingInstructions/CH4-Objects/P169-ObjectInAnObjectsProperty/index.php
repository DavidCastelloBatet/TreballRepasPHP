<?php

declare(strict_types=1);

class Compte
{
  # Constructor modern PHP 8
  public function __construct(
    public object $numeros,
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

class NumeroCompte
{
  public function __construct(
    public int $numero_compte,
    public int $routing_number,
  ) {
  }
}

# $numeros = ['numero_compte' => 12345, 'routing_number' => 67890];

$numeros = new NumeroCompte(7777, 8888);

$compte_david = new Compte($numeros, 'Estalvis', 100.00);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasar un objecte com a propietat d'un objecte</title>
</head>

<body>
  <h1>Client: David Castelló dev & data</h1>
  <h2>Compte: <?= $compte_david->numeros->numero_compte ?> - Tipus: <?= $compte_david->tipus_compte ?> - Routing: <?= $compte_david->numeros->routing_number ?></h2>

</body>

</html>