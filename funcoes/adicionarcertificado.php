<?php include_once "..\conexao.php"; ?>
<?php 
 

        $protocolo = $_POST['numproto'];
        $nome = $_POST['nomealuno'];
        $curso = $_POST['curso'];
        $data = $_POST['datasolicitada'];    

        $sql = $conn->query("SELECT * FROM addentregapos WHERE numproto='$protocolo'");
			
		if(mysqli_num_rows($sql) > 0){
             echo '2';   
            //echo "<script>alert('Este curso já está cadastrado');</script>";
			//echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/addcertificado.php?o=Este protocolo já está cadastrado';</script>";
		exit();
		} else {
			 if(!$conn->query("INSERT INTO addentregapos(nome,curso,numproto,datasolicitada) VALUES ('$nome','$curso','$protocolo','$data')")) die ('Os dados não foram inseridos');
           echo '1';
             //  header('Location: /protocolos/addcertificado.php');
		} 



?>