<?php

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");//serve para remover qualquer coisa, dai não estar o nome de uma variavel, pois se não removia a variavel em vez do arquivo.

echo "OK";

?>""