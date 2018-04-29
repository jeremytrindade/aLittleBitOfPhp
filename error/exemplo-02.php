 <?php

error_reporting(E_ALL & ~E_NOTICE);// serve para editar o php.ini sem ter acesso a ele.

$nome = $_GET["nome"];

echo $nome;

?>