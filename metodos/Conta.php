<?php

class Conta {

  public $numero;
  public $saldo;
  public $limite;
  public $agencia;

  public function __contruct($numero){
  $this->numero = $numero;
  }

  public function deposita($valor){
  $this->saldo += ($valor);
  }

  public function saca($valor){
    $this->saldo -=($valor);
      if ($valor <= $this->saldo) {
        return TRUE;
        echo "Saque Efetuado com Sucesso";
      }else
        return FALSE;
        echo "Saldo Insuficiente";
      }
}


 ?>
