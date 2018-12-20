<?php 
	
	$servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";

    $id=$_GET['id'];   

    $numproto = $_POST['numproto'];   	
    $data = $_POST['datasolicitada'];   
    $curso = $_POST['curso'];   
    $nome = $_POST['nomealuno'];
    

  	$conn = mysqli_connect($servername, $username, $password, $database);    
            
    $sql = "UPDATE addentregapos SET numproto='$numproto',nome='$nome', curso='$curso',datasolicitada='$data' WHERE id='$id'";
    $update = mysqli_query($conn, $sql);

    if ($update) {
             header('Location: /protocolos/verificacertificados.php');
    }else{
            header('Location: /protocolos/menu.php');
    }
		
 ?>



