<?php
	$servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";
                                        
        $conn = mysqli_connect($servername, $username, $password, $database);	
	
	//Recuperar o valor da palavra
	$encaminhamentos = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$encaminhamento = "SELECT * FROM addprotocolos WHERE encaminhamento LIKE '$encaminhamentos%'";
	$resultado_cursos = mysqli_query($conn, $encaminhamento);
	
	if(mysqli_num_rows($resultado_cursos) <= 0){
		echo "Nenhum curso encontrado...";
	}else{
		$rows = mysqli_fetch_assoc($resultado_cursos);
			echo "<td>".$rows['encaminhamento']."</td>";
			echo "<td>".$row['requerente']."</td>";	
			echo "<td>".$row['datasolicitada']."</td>";		
		
	}
?>