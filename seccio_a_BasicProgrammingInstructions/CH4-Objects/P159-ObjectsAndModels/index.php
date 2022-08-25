<?php

class CompteCorrent
{
  public int $numero_compte;
  public string $tipus_compte;
  public float $saldo;

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

$compte_david = new CompteCorrent();
$compte_david->saldo = 1000.00;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear metodes de classe i fer-los servir</title>
</head>

<body>
  <h1>David Castello Dev&Data</h1>
  <h3>Saldo Inicial: <?= $compte_david->saldo ?> </h3>
  <h3>Saldo Final: <?= $compte_david->diposit(50.00) ?></h3>
</body>

</html>