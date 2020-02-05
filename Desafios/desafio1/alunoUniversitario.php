<?php

class alunoUniversitario extends aluno{

    public function notas(){
        $media = array_sum($this->notas) / 5;
        if($media>=5){
            echo "Aprovado";
        }else {
            echo "Reprovado";    
        }

}
}
?>