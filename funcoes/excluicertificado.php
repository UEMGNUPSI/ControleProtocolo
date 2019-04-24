<?php include_once "/protocolos/conexao.php"; ?>
<?php 
        $id = $_GET['id'];	

				
			$sql = "DELETE FROM addentregapos WHERE id='$id'";
			$update = mysqli_query($conn, $sql);		    
   		
      if($update){
           header('Location: /protocolos/verificacertificados.php');
      }else {
         header('Location: /protocolos/menu.php');
    }
		

?>