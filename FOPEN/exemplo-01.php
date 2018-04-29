<?php

$file = fopen("log.txt","a+");//w+ zera o ficheiro e escreve

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";
?>