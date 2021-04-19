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
//$usuario = new Usuario();
//$usuario->login("caetano", "432987");

//echo $usuario;
/*
//Criando um novo usuário 
$aluno = new Usuario();

$aluno->setDeslogin("domingas");
$aluno->setDessenha("654789");

$aluno->insert();
echo $aluno;
*/
$usuario = new Usuario();

$usuario->loadByID(7);

$usuario->update("professor", "@#$0921");
echo $usuario;


?>