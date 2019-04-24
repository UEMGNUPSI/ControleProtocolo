<?php include_once "/protocolos/conexao.php"; ?>
 <?php 

        $id = $_GET['id'];	

				
			$sql = "DELETE FROM curso WHERE id='$id'";
			$update = mysqli_query($conn, $sql);		    
   		

		if($update){
       		 header('Location: /protocolos/listacursos.php');
   		}else {
    		 header('Location: /protocolos/menu.php');
 		}

?>