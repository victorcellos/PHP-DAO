<?php

require_once("config.php");
// Carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//================

//carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//====================

//Carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

//====================

//carrega um usuario usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("Carlos", "53512321");
// echo $usuario;

//====================
//insert de um usuario novo

// $aluno = new Usuario();
// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("ggwp");
// $aluno->insert();
// echo $aluno;

//====================
//insert de um usuario novo porem menor e com o insert dentro da arquivo usuarios

// $aluno = new Usuario("beto", "1234");
// $aluno->insert();
// echo $aluno;

//====================

//Comando usado para dar UPDATE 

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "ggwpz");
echo $usuario;


//====================

// Mostra todas os usuarios criado
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

?>