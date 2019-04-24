 <?php include_once "/protocolos/conexao.php"; ?>
 <?php 
         $id = $_GET['id'];	

				
			$sql = "DELETE FROM encaminhamento WHERE id='$id'";
			$update = mysqli_query($conn, $sql);		    
   		

		if($update){
       		 header('Location: /protocolos/listaencaminahmento.php');
   		}else {
    		 header('Location: /protocolos/menu.php');
 		}

?>