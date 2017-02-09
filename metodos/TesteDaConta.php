<?php

require_once ('Conta.php');

$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 0;
$conta->limite = 5000;



$conta->deposita(700);
$conta->saca(300);

echo "Saldo Final: $conta->saldo\n";

 ?>
