<?php

$pasta = "arquivos";

$permissao = "0775";

if(!is_dir($pasta)) {mkdir ($pasta, $permissao);//0 a 7 0 nao faz nada 2 pode gravar 3 é junção do 1 e 2 permição 4 é so de leitura 5 leitura e execução 6 leitura e gravação sem execução 7 leitura execução gravação  o mais usado 7 e 5 porque o 5 apenas não tem a gravação

echo "Diretório criado com sucesso!";}

?>