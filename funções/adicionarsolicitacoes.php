<?php 
		$servername = "127.0.0.1";
        $database = "protocolos";
        $username = "root";
        $password = "";
                                         
            $conn = mysqli_connect($servername, $username, $password, $database);

        $protocolo = $_POST['numproto'];
        $nome = $_POST['nomealuno'];
        $atendente = $_POST['nomeatendente'];
        $data = $_POST['data'];    

        $sql = $conn->query("SELECT * FROM solicitacaodiplomas WHERE numproto='$protocolo'");
			
		if(mysqli_num_rows($sql) > 0){
				//echo "<script>alert('Este curso já está cadastrado');</script>";
				echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/solicitadiplomas.php?o=Este protocolo já está cadastrado';</script>";
		exit();
		} else {
			 if(!$conn->query("INSERT INTO solicitacaodiplomas(requerente,atendente,numproto,datasolicitada) VALUES ('$nome','$atendente','$protocolo','$data')")) die ('Os dados não foram inseridos');
			  header('Location: /protocolos/solicitacaodiploma.php');
		}
?>