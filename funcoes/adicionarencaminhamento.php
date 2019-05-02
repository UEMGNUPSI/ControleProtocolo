<?php include_once "../conexao.php"; ?>
<?php 
	

	$encaminhamento = $_POST['encaminhamento'];
	
		$sql = $conn->query("SELECT * FROM encaminhamento WHERE encaminhamento='$encaminhamento'");
			
		if(mysqli_num_rows($sql) > 0){
			echo '2';	
			//echo "<script>alert('Este curso já está cadastrado');</script>";
				//echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/adddencaminhamento.php?o=Este curso já está cadastrado';</script>";
		exit();
		} else {
			 if(!$conn->query("INSERT INTO encaminhamento(encaminhamento) VALUES ('$encaminhamento')")) die ('Os dados não foram inseridos');
			echo '1';
			 // header('Location: /protocolos/addencaminhamento.php');
		}
 ?>