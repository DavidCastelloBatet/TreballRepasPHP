<?php

class Customer
{
  public string $forename;
  public string $surename;
  public string $email;
  public string $password;
}

class Account
{
  public int $number;
  public string $type;
  public float $balance;
}

$david = new Customer();
$compte_corrent = new Account();

$david->forename = 'David';
$compte_corrent->balance = 100.50;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear i accedir a classes</title>
</head>

<body>
  <h1>David Castello Dev&Data</h1>
  <h3>Extracte</h3>
  <p>Client: <?= $david->forename ?></p>
  <p>Saldo: <?= $compte_corrent->balance ?></p>
</body>

</html>