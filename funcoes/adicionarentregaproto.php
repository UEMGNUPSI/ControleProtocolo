<?php 
    
    include_once '..\conexao.php';

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
    
    $sql = $conn->query("SELECT * FROM addentregaprotocolos WHERE  numproto='$numproto'");
 

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

			
		if(mysqli_num_rows($sql) > 0){
      echo json_encode('2');
				//echo "<script>alert('Este curso já está cadastrado');</script>";
				//echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/addprotocolos.php?o=Este número de Protocolo já foi cadastrado!';</script>";
		
		} else {      
      if(!$conn->query("INSERT INTO addentregaprotocolos(numproto,nome,atendente,curso,periodo,data,dataretirada,entregue,descricao,observacao,dae,encaminhamento,vencimento,datavencimento,status) VALUES ('$numproto','$nomeatendido','$nomeatendente','$curso','$periodo','$data','$dataretirada','$entregue','$descricao','$observacao' ,'$DAE','$encaminhamento','$vencimento','$datavencimento','0')")) die ('Os dados não foram inseridos');
      echo json_encode('1');
      
			  //header('Location: /protocolos/addentregaproto.php');
		}
  //  header("Content-Type: text/html; charset=ISO-8859-1",true);
 ?>




