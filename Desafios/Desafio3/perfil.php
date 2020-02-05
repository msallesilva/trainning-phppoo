<?php

class Perfil{

    private $id;
    private $nome;    

    public function __construct($id, $nome){
        $this->id =$id;
        $this->nome =$nome;        
    }
    
    public function getNomeP(){
        return $this->nome;
    }
        
    public function getId(){
        return $this->id;
    }       
}
?>