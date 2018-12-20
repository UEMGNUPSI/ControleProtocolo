<?php 
	
	$servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";

    $id=$_GET['id'];   

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
			
	$sql = "UPDATE addentregaprotocolos SET numproto='$numproto',nome='$nomeatendido', atendente ='$nomeatendente',curso='$curso',dataretirada='$dataretirada',data='$data',dae='$DAE',observacao='$observacao',periodo='$periodo',descricao='$descricao',entregue='$entregue',encaminhamento = '$encaminhamento' WHERE id='$id'";
    $update = mysqli_query($conn, $sql);

    if ($update) {
             header('Location: /protocolos/verficaentregaproto.php');
    }else{
            header('Location: /protocolos/menu.php');
    }
		
 ?>



