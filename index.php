<?php
require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadByID(5);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario ::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando por login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando oi login e senha
$usuario = new Usuario();
$usuario->login("caetano", "432987");

echo $usuario;

?>