<?php

class produto{

    private $nomeProduto;
    private $valorProduto;

    

    public function getnomeProduto(){
        return $this->nomeProduto;
    }

    public function setnomeProduto($nomeProduto){
        return $this->nomeProduto = $nomeProduto;
    }

    public function getvalorProduto(){
        return $this->valorProduto;
    }

    public function setvalorProduto($valorProduto){
        return $this->valorProduto = $valorProduto;
    }

    public function desconto($valorProduto){
        
    }
}



?>