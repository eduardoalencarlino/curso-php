<?php

//Exercicio 9

class Aluno {
  public $nome;
  public $rg;
  public $dataNascimento;
}

//Exercicio 10
$aluno1 = new Aluno;
$aluno1->nome = "Eduardo Alencar";
$aluno1->rg = 415658887;
$aluno1->dataNascimento = "03/09/1988";

$aluno2 = new Aluno;
$aluno2->nome = "Jose Lino";
$aluno2->rg = 415659999;
$aluno2->dataNascimento = "23/10/1958";

echo "Nome: $aluno1->nome\n";
echo "RG: $aluno1->rg\n";
echo "Data Nasc: $aluno1->dataNascimento\n";

echo "Nome: $aluno2->nome\n";
echo "RG: $aluno2->rg\n";
echo "Data Nasc: $aluno2->dataNascimento\n";

 ?>
