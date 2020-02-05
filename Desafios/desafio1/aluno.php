<?php

class aluno {
    private $nome;
    private $idade;
    protected $notas;

    public function __construct($notas) {
        $this->notas = $notas;
    }

    public function getNome(){
        return $this->nome;

    }

    public function setNome($nome){
        return $this->nome = $nome;

    }

    public function getIdade(){
        return $this->idade;

    }

    public function setIdade(int $idade){
        return $this->idade = $idade;

    }


    public function notas(){
        $media = array_sum($this->notas) / 4;
        if($media>=5){
            echo"aprovado";
        }else {
            echo "reprovado";    
        }
    }

}


?>