<?php 

//fopen espera dois parametros
//1º - caminho do arquivo e nome
//2º - o que fazer com o arquivo
//"w+" abre o conteudo em modo escrita e zera o conteudo!
//"a+" conteudo preservado, e texto adicionado após

$file = fopen("log.txt", "a+");

//fwrite espera dois parametros
//1º -  resource
//2º - dados que queremos inserir no arquivo
fwrite($file, date("Y-m-d H:i:s") ."\r\n");

//fclose espera resource
fclose($file);

echo "Arquivo criado com sucesso!!";

?>