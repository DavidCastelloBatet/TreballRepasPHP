<?php
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
