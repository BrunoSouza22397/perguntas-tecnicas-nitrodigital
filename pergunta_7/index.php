<?php
require __DIR__ . '/vendor/autoload.php';

use Classe\Usuario;

$usuario = new Usuario();

$nome = "Bruno";
$telefone = "993655945";
$nivel = "1";

$usuario->preencherDados($nome, $telefone, $nivel);
$usuario->cadastrar();

echo "Nome: ". $usuario->getNome() ."|\n";
echo "Telefone: ". $usuario->getTelefone() ."|\n";
echo "Nível: ". $usuario->getNivel() ."|\n";
echo "Data de Cadastro: ". $usuario->getDataCadastro() ."|\n";