<?php

class Conta{

    private $numeroConta;
    private $numeroAgencia;
    private $limiteOperacao;
    private $saldo;
    public $valorTransferencia;

    function __construct(int $numeroConta,int $numeroAgencia)
    {
        $this->numeroConta = $numeroConta;
        $this->numeroAgencia = $numeroAgencia;        
    }

    function getNumeroConta(){
        return $this->numeroConta;
    }

    function setNumeroConta($numeroConta){
        return $this->numeroConta = $numeroConta;
    }

    function getNumeroAgencia(){
        return $this->numeroAgencia;
    }

    function setNumeroAgencia($numeroAgencia){
        return $this->numeroAgencia = $numeroAgencia;
    }    

    function getLimiteOperacao(){
        return $this->limiteOperacao;
    }

    function setLimiteOperacao($limiteOperacao){
        $limiteOperacao = 2000;
        return $this->limiteOperacao = $limiteOperacao;
    }

    function getSaldo(){
        return $this->saldo;
    }

    function setSaldo($saldo){
        return $this->saldo = $saldo;
    }

    function contaValorTransferido($valor,$cc){
        $saldoCT = $this->getSaldo + $valor;
        $this->setSaldo($saldoCT);
    }
    function transferencia($valorTransferencia,$numConta){

        echo "O Saldo Atual é de " . $this->getSaldo() . PHP_EOL;

        if ($this->saldo > $valorTransferencia || $this->limiteOperacao > $valorTransferencia){
            $saldoTotal = $this->getSaldo - $valorTransferencia;
            $this->setSaldo($saldoTotal); 

            $this->contaValorTransferido($valorTransferencia,$numConta);

            echo "O Saldo após a operação é : " . $this->getSaldo() . PHP_EOL;
            return " Operação Realizada com Sucesso para conta $numConta " ;
        }
        elseif($this->limiteOperacao < $valorTransferencia){
            return " Valor da Transferencia ultrapassou o Limite de transferencia Diario";
        }else{
            return "Saldo da Conta é Insulficiente para Transferencia";
        }
    }
}

?>