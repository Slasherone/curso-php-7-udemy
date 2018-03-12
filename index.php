<?php
require_once("config.php");

$usuario = new Usuario();

//Carrega as informações de um usuario específico
//$usuario->loadById(3);
//echo $usuario;

//Carrega uma lista com todos os usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carega uma lista de usuários buscando por um login
//$search = Usuario::search("R");
//echo json_encode($search);

//Carrega um usuário usando login e senha
//$usuario->login('teste', 'testando');
//echo $usuario;

//Criando um novo usuário
//$usuario = new Usuario('UmUsuarioDeTesteQualquer', 'UmaSenhaDeTesteQualquer');
//$usuario->insert();
//echo $usuario;

//Carregando e atualizando as informações de um usuário
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update('Ronaldinho PEDREIRO', 'minha MARRETAAAAA');

//Deletando um usuário
//$usuario = new Usuario();
//$usuario->loadById(13);
//$usuario->delete();
//echo $usuario;