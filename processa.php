<?php
	$servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";
                                   
    $conn = mysqli_connect($servername, $username, $password, $database);

	$nome=$_POST['nome'];
	$nome_imagem = $_FILES['arquivo']['name'];
	echo "Nome da Imagem do produto: $nome_imagem <br>";
	
	//Salvar no banco de dados
	$result_produto = "INSERT INTO documentos (documentos) VALUES ('$nome_imagem')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id = mysqli_insert_id($conn);
	echo "Ultimo Id Inserido: $ultimo_id <br>";
	
	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'imagens/produtos/'.$ultimo_id.'/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	//Verificar se é possive mover o arquivo para a pasta escolhida
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$_UP['pasta'].$nome_imagem)){
		echo "Imagem salva com sucesso!<br>";
	}

?>