<?php 
	
  $servername = "10.93.10.10";
  $database = "protocolos";
  $username = "protocolos";
  $password = "protocolos*01";
                   
    $conn = mysqli_connect($servername, $username, $password, $database);

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
    

	
			
	$sql = "UPDATE addprotocolos SET numproto='$numproto',nome='$nomeatendido', atendente ='$nomeatendente',curso='$curso',historico='$historico',data='$data',hora='$hora',observacao='$observacao',encaminhamento='$encaminhamento' WHERE Id='$id'";
	$update = mysqli_query($conn, $sql);

	if ($update) {
             header('Location: /protocolos/verificaprotocolos.php');
    }else{
            header('Location: /protocolos/menu.php');
    }
		
 ?>



