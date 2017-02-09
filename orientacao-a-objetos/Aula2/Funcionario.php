<?php

//Exercicio 11

class Funcionario {
  public $nome;
  public $salario;
}

//Exercicio 12

$funcionario1 = new Funcionario;
$funcionario1->nome = "Gabriel da Silva";
$funcionario1->salario = 5000;

$funcionario2 = new Funcionario;
$funcionario2->nome = "Sueli de Souza";
$funcionario2->salario = 8950;

echo "Nome do Funcionário: $funcionario1->nome\n";
echo "Salário do Funcionário: $funcionario1->salario\n";

echo "Nome do Funcionário: $funcionario2->nome\n";
echo "Salário do Funcionário: $funcionario2->salario\n";

?>
