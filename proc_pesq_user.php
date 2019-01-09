<?php
//Incluir a conexão com banco de dados
    $servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";
                                         
        $conn = mysqli_connect($servername, $username, $password, $database);

		$encaminhamentos = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

		//Pesquisar no banco de dados nome do usuario referente a palavra digitada
		$result_user = "SELECT * FROM addprotocolos WHERE encaminhamento LIKE '%$encaminhamentos%' LIMIT 20";
		$resultado_user = mysqli_query($conn, $result_user);

		if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
			while($row = mysqli_fetch_assoc($resultado_user)){
				echo "<li>".$row['encaminhamento']."</li>";				
			}
		}else{
			echo "Nenhum encaminhamento encontrado ...";
}