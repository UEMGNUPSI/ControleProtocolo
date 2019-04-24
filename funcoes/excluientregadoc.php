<?php include_once "/protocolos/conexao.php"; ?>
<?php 

        $id = $_GET['id'];	

				
			$sql = "DELETE FROM addentregaprotocolos WHERE id='$id'";
			$update = mysqli_query($conn, $sql);		    
   		
      if($update){
           header('Location: /protocolos/verficaentregaproto.php');
      }else {
         header('Location: /protocolos/menu.php');
    }
		

?>