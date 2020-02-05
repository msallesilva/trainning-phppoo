<?php

class alunoUniversitario extends aluno{

    public function gerarMedia(){
        $media = array_sum($this->notas)/5;
        return $media >=5?" Aprovado ":" Reprovado ";
    }


}

?>