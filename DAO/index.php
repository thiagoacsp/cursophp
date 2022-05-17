<?php 

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuário
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("th");
// echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("thiago", "123456");
//echo $usuario;

$aluno = new Usuario("aluno", "@luno");

// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("@luno");

$aluno->insert();

echo $aluno;
?>