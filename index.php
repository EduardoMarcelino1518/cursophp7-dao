<?php 

require_once("config.php");
 
/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//Carrega um usuário //
$root = new Usuario();
$root->loadbyId(4);
echo $root;
echo "<br>";
echo "<br>";

//Carrega uma lista de usuários//

$lista = Usuario::getList();

echo json_encode($lista);
echo "<br>";
echo "<br>";

// Carrega uma lista de usuários buscando pelo login//

$search = Usuario::search("jo");

echo json_encode($search);
echo "<br>";
echo "<br>";

//Carrega um usuário ussando o login e a senha
$usuario = new Usuario();
$usuario->login("sdaf","asfdas"); // exemplo de login errado
$usuario->login("root","@#$!");


echo $usuario;

?>