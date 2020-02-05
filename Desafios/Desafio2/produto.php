<?php

class produto{
    private $nome;
    private $valor;
    private $desconto;

    public function __construct(string $nome,float $valor,float $desconto)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->desconto = $desconto;    
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $nome){
        return $this->nome = $nome;
    }
    public function getValor(){
        return $this->valor;
    }
    public function setValor(float $valor){
        return $this->valor = $valor;
    } 
    public function getValorDesconto(){
        $total =$this->valor - (($this->valor * $this->desconto)/100);
        return "Valor sem desconto é R$:" . $this->valor . PHP_EOL . "Valor com Desconto é R$:" . $total;
    }
    
}

?>