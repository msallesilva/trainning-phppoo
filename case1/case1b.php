<?php

#cLASSE 
require 'produto.php';

$p1 = new Produto();
#$p1->nome = "aaaa"; // erro
$p1->setNome("aaaa");

//var_dump($p1->nome); // erro
var_dump($p1->getNome());

$f1 = new Fabricante();
$f1->setNome("Apple");

$p1->setFabricante($f1);
var_dump($p1);

echo "Fabricante: ", $p1->getFabricante()->getNome();
?>