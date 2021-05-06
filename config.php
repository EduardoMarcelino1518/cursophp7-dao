<?php 

spl_autoload_register(function(){ // passando parametro e colocando ele dentro de filename esta dando erro 

$filename = "class".DIRECTORY_SEPARATOR."Sql.php";

if(file_exists(($filename))) {
	require_once($filename);
}

$filename1 = "class".DIRECTORY_SEPARATOR."Usuario.php";

if(file_exists(($filename1))) {
	require_once($filename1);
}

});

?>