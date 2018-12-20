<?php 
	
	$servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";

    $id=$_POST['id'];   

    $numproto = $_POST['numproto'];  
   
   	$nomeatendente = $_POST['nomeatendente'];
    $nomeatendido = $_POST['nomeatendido'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $curso = $_POST['curso'];
    $historico = $_POST['historico'];    
    $observacao = $_POST['observacao'];
    $encaminhamento = $_POST['encaminhamento'];
    

  	$conn = mysqli_connect($servername, $username, $password, $database);	
			
	$sql = "UPDATE addprotocolos SET numproto='$numproto',nome='$nomeatendido', atendente ='$nomeatendente',curso='$curso',historico='$historico',data='$data',hora='$hora',observacao='$observacao',encaminhamento='$encaminhamento' WHERE Id='$id'";
	$update = mysqli_query($conn, $sql);

	if ($update) {
             header('Location: /protocolos/verificaprotocolos.php');
    }else{
            header('Location: /protocolos/menu.php');
    }
		
 ?>



