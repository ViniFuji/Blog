<?php
// Declarando na variável o nome da pasta que vai receber os arquivos
$diretorio = "arquivos/";

// Operador ternário que verifica se o arquivo existe
$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

// Verifica todos os arquivos selecionados para upload
for ($k = 0; $k < count($arquivo['name']); $k++) {

    // pathinfo dica
	
	$destino = $diretorio . "/" . $arquivo['name'][$k];
	if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
		echo "Arquivo enviado com sucesso!";
	} else {
		echo "Erro ao enviar o arquivo.";
	}
}
?>