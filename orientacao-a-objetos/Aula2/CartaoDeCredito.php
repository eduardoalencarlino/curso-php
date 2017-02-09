<?php

//Exercicio 3

class CartaoDeCredito {
  public $numero;
  public $dataDeValidade;
}

//Exercicio 4
$cartao1 = new CartaoDeCredito;
$cartao1->numero = 111111;
$cartao1->dataDeValidade = 01/01/2013;

$cartao2 = new CartaoDeCredito;
$cartao2->numero = 222222;
$cartao2->dataDeValidade = 21/11/2018;

echo "Número do Cartão: $cartao1->numero\n";
echo "Data de Validade: $cartao1->dataDeValidade\n";

echo "Número do Cartão: $cartao2->numero\n";
echo "Data de Validade: $cartao2->dataDeValidade\n";

?>
