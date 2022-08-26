<?php

class Client
{
  public function __construct(
    public string $cognom,
    public string $nom,
    public string $email,
    private string $password,
    public array $comptes,
  ) {
  }

  public function getNomComplert()
  {
    return "$this->nom $this->cognom";
  }
}
