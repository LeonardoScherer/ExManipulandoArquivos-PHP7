<?php 

$file = fopen("teste.txt", "w+");

fclose($file);

//unlink - remove arquivo
/*Se utilizar a variavel $file, aponta para o arquivo no modo que foi aberto "w+", 
/vai remover a variavel*/
unlink("teste.txt");

echo "Arquivo removido com sucesso";

?>