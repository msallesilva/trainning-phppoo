<?php

#PARAMETROS VIA CONSTRUTOR

require 'produto.php';

$f1 = new Fabricante("Apple");
//$f1->setNome("Apple");

$p1 = new Produto('Iphone', 5000, $f1);

print_r($p1);
?>