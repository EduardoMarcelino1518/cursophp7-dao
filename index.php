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
//$usuario->login("sdaf","asfdas"); // exemplo de login errado
$usuario->login("root","@#$!");


echo $usuario;
echo "<br>";
echo "<br>";

//Insert de um novo usuario 

/*$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@aluno");

$aluno->insert();

echo $aluno;*/

// Insert de um novo usuario com método construtor //

/*$aluno = new Usuario("aluno", "@aluno");

$aluno->insert();

echo $aluno; COMENTEI TODO MEU TRECHO DE INSERT PARA NÃO HAVER INSERT AUTOMATICO TODA VEZ QUE CARREGO MINHA PAGINA */

// Alterar um usuario //


/*$update = new Usuario();

$update->loadById(8);

$update->update("professor", "!@#$%¨&*");

echo $update;*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>