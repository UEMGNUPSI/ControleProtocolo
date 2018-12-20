<?php 
    //Recebe os dados com as alterações feitas
      
    $servername = "127.0.0.1";
	$database = "protocolos";
	$username = "root";
	$password = "";
    $id =  $_POST['id'];  
    $curso = $_POST['curso'];


    //Estabelece a conexão com o mysql
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $sql = "UPDATE curso SET curso='$curso' WHERE id='$id'";
    $update = mysqli_query($conn, $sql);
    
    if ($update) {
            header('Location: /protocolos/listacursos.php');
    }else{
            header('Location? /protocolos/menu.php');
    }
     
   
     
?>