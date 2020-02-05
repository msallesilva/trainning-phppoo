<?php
require "produto.php";

$prod = new produto("Caneta Azul",100.00, 23);
echo $prod->getValorDesconto();


?>