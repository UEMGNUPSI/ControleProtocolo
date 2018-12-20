<?php 
   
      
    $servername = "127.0.0.1";
	$database = "protocolos";
	$username = "root";
	$password = "";
    $id =  $_POST['id'];  
    $encaminhamento = $_POST['encaminhamento'];


  //Estabelece a conexão com o mysql
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $sql = "UPDATE encaminhamento SET encaminhamento='$encaminhamento' WHERE id='$id'";
    $update = mysqli_query($conn, $sql);
    
    if ($update) {
            header('Location: /protocolos/listaencaminahmento.php');
    }else{
            header('Location? /protocolos/menu.php');
    }
     
   
     
?>