<?php 
	
	  $servername = "10.93.10.10";
  $database = "protocolos";
  $username = "protocolos";
  $password = "protocolos*01";
                   
    $conn = mysqli_connect($servername, $username, $password, $database);


    $numproto = $_POST['numproto'];
    $nomeatendente = $_POST['nomeatendente'];
    $nomeatendido = $_POST['nomeatendido'];
    $data = $_POST['data'];
    $dataretirada = $_POST['dataretirada'];
    $curso = $_POST['curso'];
    $vencimento = $_POST['vencimento'];    
    $DAE = $_POST['DAE'];
    $periodo = $_POST['periodo'];    
    $entregue = $_POST['entregue'];
    $descricao = $_POST['descricao'];
    $observacao = $_POST['observacao'];
    $encaminhamento = $_POST['encaminhamento'];
    

  

    if($vencimento=='5 Dias'){    
        $conversao = strtotime($data);  

        $conversao2 =  date('Y-m-d',$conversao);
        $somadata =  strtotime("$conversao2 +5 days");  
        $datavencimento = date('Y-m-d',$somadata);    
    }else{          
        $conversao = strtotime($data);   
      
        $conversao2 = date('Y-m-d',$conversao);
        $somadata =  strtotime("$conversao2 + 3 days"); 
        $datavencimento = date('Y-m-d',$somadata); 
                   
        }

	$sql = $conn->query("SELECT * FROM addentregaprotocolos WHERE  numproto='$numproto'");
			
		if(mysqli_num_rows($sql) > 0){
      echo '2';
				//echo "<script>alert('Este curso já está cadastrado');</script>";
				//echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/addprotocolos.php?o=Este número de Protocolo já foi cadastrado!';</script>";
		
		} else {
      if(!$conn->query("INSERT INTO addentregaprotocolos(numproto,nome,atendente,curso,periodo,data,dataretirada,entregue,descricao,observacao,dae,encaminhamento,vencimento,datavencimento) VALUES ('$numproto','$nomeatendido','$nomeatendente','$curso','$periodo','$data','$dataretirada','$entregue','$descricao','$observacao' ,'$DAE','$encaminhamento','$vencimento','$datavencimento')")) die ('Os dados não foram inseridos');

      echo '1';
			  //header('Location: /protocolos/addentregaproto.php');
		}
 ?>




