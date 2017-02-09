<?php

//Exercicio 13

class Turma {

  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;
}

//Exercicio 14

$turma1 = new Turma;
$turma1->periodo = "Tarde";
$turma1->serie = 8;
$turma1->sigla = "A";
$turma1->tipoDeEnsino = "Fundamental";

$turma2 = new Turma;
$turma2->periodo = "Manhã";
$turma2->serie = 5;
$turma2->sigla = "B";
$turma2->tipoDeEnsino = "Fundamental";

echo "Período: $turma1->periodo\n";
echo "Série: $turma1->serie\n";
echo "Sigla: $turma1->sigla\n";
echo "Tipo de Ensino: $turma1->tipoDeEnsino\n";

echo "Período: $turma2->periodo\n";
echo "Série: $turma2->serie\n";
echo "Sigla: $turma2->sigla\n";
echo "Tipo de Ensino: $turma2->tipoDeEnsino\n";

?>
