<?php

//Exercicio 7

class Conta {
  public $numero;
  public $saldo;
  public $limite;
}

//Exercicio 8
$conta = new Conta;
$conta->numero = 001;
$conta->saldo = 555;
$conta->limite = 5000;

echo "Número da Conta: $conta->numero\n";
echo "Saldo: $conta->saldo\n";
echo "Limite: $conta->limite\n";


?>
