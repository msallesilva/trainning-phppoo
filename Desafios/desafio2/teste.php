<?php
require "produto.php";
require "desconto.php";

$prod = new produto();
$prod -> setnomeProduto("Caneta");
$prod -> setvalorProduto(20);

$desc = new desconto();
$desc ->desconto($prod->getvalorProduto(),20);

echo $prod->getnomeProduto() . " Valor : " . $prod->getvalorProduto() . " Fica com desconto fica o valor : " . 
$desc->desconto($prod->getvalorProduto(),20)  ;

?>