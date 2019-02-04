<?php 
                              
        $servername = "127.0.0.1";
        $database = "protocolos";
        $username = "root";
        $password = "";
                                         
            $conn = mysqli_connect($servername, $username, $password, $database);

        $id = $_GET['id'];	

				
			$sql = "DELETE FROM addentregapos WHERE id='$id'";
			$update = mysqli_query($conn, $sql);		    
   		
      if($update){
           header('Location: /protocolos/verificacertificados.php');
      }else {
         header('Location: /protocolos/menu.php');
    }
		

?>