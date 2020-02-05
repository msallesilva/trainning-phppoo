<?php

class aluno{
    private $nome;
    private $idade;
    private $notas;


    public function __construct($nome,$idade,$notas)
    {
        $this->nome = $nome; 
        $this->idade = $idade;
        $this->notas = $notas;   
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $nome){
        return $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade(int $idade){
        return $this->idade = $idade;
    }

    public function gerarMedia(){
        $media = array_sum($this->notas)/4;
        return $media >=5?" Aprovado ":" Reprovado ";
    }

}

?>