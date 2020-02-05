<?php

class desconto extends produto{

    protected $descontoTotal;

    public function __construct(){
        
    }

    public function desconto($valorProduto,$descontoTotal){
        $valorFinal = $this->valorProduto * ($descontoTotal/100);
        return $valorFinal;
    }

}


?>