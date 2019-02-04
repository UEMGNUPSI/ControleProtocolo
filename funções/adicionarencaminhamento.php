<?php 
	
	 $servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";
    $encaminhamento = $_POST['encaminhamento'];
    

  	$conn = mysqli_connect($servername, $username, $password, $database);


	$sql = $conn->query("SELECT * FROM encaminhamento WHERE encaminhamento='$encaminhamento'");
			
		if(mysqli_num_rows($sql) > 0){
				//echo "<script>alert('Este curso já está cadastrado');</script>";
				echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/adddencaminhamento.php?o=Este curso já está cadastrado';</script>";
		exit();
		} else {
			 if(!$conn->query("INSERT INTO encaminhamento(encaminhamento) VALUES ('$encaminhamento')")) die ('Os dados não foram inseridos');
			  header('Location: /protocolos/addencaminhamento.php');
		}
 ?>