<?php

require "aluno.php";
require "alunoUniversitario.php";

$a = new aluno("Marco Antonio",35,[10,5,7,9,8]);
echo " O Aluno " . $a->getNome() . " foi ". $a->gerarMedia(); 


?>