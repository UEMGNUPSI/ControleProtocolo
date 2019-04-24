<?php 
                              
  $servername = "10.93.10.10";
  $database = "protocolos";
  $username = "protocolos";
  $password = "protocolos*01";
                   
    $conn = mysqli_connect($servername, $username, $password, $database);

        $id = $_GET['id'];	

				
			$sql = "DELETE FROM addentregaprotocolos WHERE id='$id'";
			$update = mysqli_query($conn, $sql);		    
   		
      if($update){
           header('Location: /protocolos/verficaentregaproto.php');
      }else {
         header('Location: /protocolos/menu.php');
    }
		

?>