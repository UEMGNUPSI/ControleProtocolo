<?php include_once "/protocolos/conexao.php"; ?>
<?php 
        $protocolo = $_POST['numproto'];
        $nome = $_POST['nomealuno'];
        $atendente = $_POST['nomeatendente'];
        $data = $_POST['data'];    

        $sql = $conn->query("SELECT * FROM solicitacaodiplomas WHERE numproto='$protocolo'");
			
		if(mysqli_num_rows($sql) > 0){
           echo '2';
				//echo "<script>alert('Este curso já está cadastrado');</script>";
				//echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/solicitadiplomas.php?o=Este protocolo já está cadastrado';</script>";
		exit();
		} else {
			 if(!$conn->query("INSERT INTO solicitacaodiplomas(requerente,atendente,numproto,datasolicitada) VALUES ('$nome','$atendente','$protocolo','$data')")) die ('Os dados não foram inseridos');
             echo '1';
            // header('Location: /protocolos/solicitacaodiploma.php');
		}
?>