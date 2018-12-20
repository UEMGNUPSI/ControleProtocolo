<?php 
	
	$servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";


    $numproto = $_POST['numproto'];
    $nomeatendente = $_POST['nomeatendente'];
    $nomeatendido = $_POST['nomeatendido'];
    $data = $_POST['data'];
    $dataretirada = $_POST['dataretirada'];
    $curso = $_POST['curso'];
    $DAE = $_POST['DAE'];
    $periodo = $_POST['periodo'];    
    $entregue = $_POST['entregue'];
    $descricao = $_POST['descricao'];
    $observacao = $_POST['observacao'];
    $encaminhamento = $_POST['encaminhamento'];
    

  	$conn = mysqli_connect($servername, $username, $password, $database);


	$sql = $conn->query("SELECT * FROM addentregaprotocolos WHERE  numproto='$numproto'");
			
		if(mysqli_num_rows($sql) > 0){
				//echo "<script>alert('Este curso já está cadastrado');</script>";
				echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/addprotocolos.php?o=Este número de Protocolo já foi cadastrado!';</script>";
		exit();
		} else {
			 if(!$conn->query("INSERT INTO addentregaprotocolos(numproto,nome,atendente,curso,periodo,data,dataretirada,entregue,descricao,observacao,dae,encaminhamento) VALUES ('$numproto','$nomeatendido','$nomeatendente','$curso','$periodo','$data','$dataretirada','$entregue','$descricao','$observacao' ,'$DAE','$encaminhamento')")) die ('Os dados não foram inseridos');
			  header('Location: /protocolos/addentregaproto.php');
		}
 ?>




