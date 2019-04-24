<?php 
  $servername = "10.93.10.10";
  $database = "protocolos";
  $username = "protocolos";
  $password = "protocolos*01";
                   
    $conn = mysqli_connect($servername, $username, $password, $database);

    $id=$_GET['id'];   

    $numproto = $_POST['numproto'];   	
    $data = $_POST['datasolicitada'];   
    $curso = $_POST['curso'];   
    $nome = $_POST['nomealuno'];
    

    $sql = "UPDATE addentregapos SET numproto='$numproto',nome='$nome', curso='$curso',datasolicitada='$data' WHERE id='$id'";
    $update = mysqli_query($conn, $sql);

    if ($update) {
             header('Location: /protocolos/verificacertificados.php');
    }else{
            header('Location: /protocolos/menu.php');
    }
		
 ?>



