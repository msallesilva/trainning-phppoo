<?php
require "aluno.php";
require "alunoUniversitario.php";

$aluno = new aluno([10,5,6,8]);
$aluno->setNome("Maria");
$aluno->setIdade(12);

echo $aluno->getNome(), " foi ", $aluno->notas() . PHP_EOL;

?>