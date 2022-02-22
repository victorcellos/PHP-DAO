<?php

require_once("config.php");
// Carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//================

// carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//====================

// Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//====================

//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("Carlos", "53512321");
echo $usuario;


//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

?>