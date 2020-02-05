<?php

require 'perfil.php';
require 'usuario.php';

$perfil = new Perfil(1, "Administrador");
$perfil2 = new Perfil(2, "Supervisor");

$usuario2 = new Usuario(2, "Marco", $perfil2);

$usuario = new Usuario(2, "Diego", $perfil);
$usuario->nome = "Meu novo nome";

echo $usuario->getTipoAcesso();

?>