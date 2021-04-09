<?php 

//scandir scaneia diretorio
$images = scandir("images");

$data = array();

foreach ($images as $img) {

	//in_array faz uma busca dentro de um array
	// ! SE NAO EXISTIR...
	if (!in_array($img, array(".", ".."))) { 
		
		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		//filesize pega o tamanho do arquivo em bytes
		$info["size"] = filesize($filename);

		//filemtime mostra quando o arquivo foi modificado
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

		//Acessar arquivo via url     //str_replace mudar barra invertida por normal
		$info["url"] = "http://localhost/DIR/" .str_replace("\\","/",$filename);

		//array_push inserir em um array, info de outro array
		array_push($data, $info);

	}
}


echo json_encode($data);


?>