<?php 

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios2");

// echo json_encode($usuarios);

// CARREGA APENAS UM USUÁRIO;
//=================================
// $manuel = new Usuario();
// $manuel->loadById(4);
// echo $manuel;

// CARREGA UMA LISTA DE USUÁRIOS
//=================================
// $lista = Usuario::getList();
// echo json_encode($lista);

// CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
//======================================================
//$search = Usuario::search("jo");
//echo json_encode($search);

// CARREGA UM USUÁRIO USANDO O LOGIN E A SENHA
//======================================================
//$usuario = new Usuario();
//$usuario->login("Jose", "9908271921974");
//echo $usuario;

// CRIANDO UM NOVO USUÁRIO - INSERT
// ========================================
/*
$aluno = new Usuario("aluno2", "$$1234");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->update("professor", "#123123#");

echo $usuario;


 ?>