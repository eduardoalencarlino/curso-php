

<?php

//Exercício 1
class Cliente {
  public $nome;
  public $codigo;
}


//Exercício 2
$cliente1 = new Cliente;
$cliente1->nome = "Eduardo Alencar";
$cliente1->codigo = 001;

$cliente2 = new Cliente;
$cliente2->nome = "Lucas Silva";
$cliente2->codigo = 002;

echo "Nome do cliente1:  $cliente1->nome\n";
echo "Codigo do cliente1:  $cliente1->codigo\n";

echo "Nome do cliente2:   $cliente2->nome\n";
echo "Codigo do cliente2:  $cliente2->codigo\n";

?>
