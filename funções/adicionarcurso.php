<?php 
	
  $servername = "10.93.10.10";
  $database = "protocolos";
  $username = "protocolos";
  $password = "protocolos*01";
                   
    $conn = mysqli_connect($servername, $username, $password, $database);
    




	$sql = $conn->query("SELECT * FROM curso WHERE curso='$curso'");
			
		if(mysqli_num_rows($sql) > 0){
			echo '2';	
			//echo "<script>alert('Este curso já está cadastrado');</script>";
				//echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/addcurso.php?o=Este curso já está cadastrado';</script>";
		exit();
		
		} else {
			 if(!$conn->query("INSERT INTO curso(curso) VALUES ('$curso')")) die ('Os dados não foram inseridos');
			 	echo '1'; 
			 //header('Location: /protocolos/addcurso.php');
		}
 ?>