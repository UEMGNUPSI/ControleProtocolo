<?php include_once "../conexao.php"; ?>
<?php 

        $id = $_GET['id'];	

				
			$sql = "DELETE FROM addprotocolos WHERE id='$id'";
			$update = mysqli_query($conn, $sql);		    
   		
      if($update){
           header('Location: /protocolos/verificaprotocolos.php');
      }else {
         header('Location: /protocolos/menu.php');
    }
		

?>