<?php 
	
	$servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";


    $numproto = $_POST['numproto'];
    $nomeatendente = $_POST['nomeatendente'];
    $nomeatendido = $_POST['nomeatendido'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $encaminhamento = $_POST['encaminhamento'];
    $curso = $_POST['curso'];
    $historico = $_POST['historico'];    
    $observacao = $_POST['observacao'];
    $vencimento = $_POST['vencimento'];
    $dataretirada = $_POST['retirada'];

    $ra = $_POST['numra'];
    $cursocolegiado = $_POST['cursocolegiado'];
    $observacaocolegiado = $_POST['observacaocolegiado'];
    $encaminhamentocolegiado = $_POST['encaminhamentocolegiado'];
    
     
    $conn = mysqli_connect($servername, $username, $password, $database);

    if($vencimento=='5 dias'){             
           $somadata =  date('d/m/Y', strtotime('+ 5 days',strtotime($data))); 
           $salvadata = date("Y-m-d ",strtotime($somadata));    
        }else{          
           $somadata =  date('d/m/Y', strtotime('+ 3 days',strtotime($data)));  
            $salvadata = date("Y-m-d ",strtotime($somadata));      
        }
    
    $sql = $conn->query("SELECT * FROM addprotocolos WHERE  id='$numproto'");
            
        if(mysqli_num_rows($sql) > 0){
                //echo "<script>alert('Este curso já está cadastrado');</script>";
                echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/addprotocolos.php?o=Este número de Protocolo já foi cadastrado!';</script>";
        exit();
        } else {
            if(!$conn->query("INSERT INTO addprotocolos(numproto,nome,atendente,curso,historico,data,hora,observacao,ra,cursocolegiado,obsevacaocolegiado,encaminhamento,encaminhamentocolegiado,vencimento,dataretirada,datavencimento) VALUES ('$numproto','$nomeatendido','$nomeatendente','$curso','$historico','$data','$hora','$observacao','$ra','$cursocolegiado','$observacaocolegiado','$encaminhamento','$encaminhamentocolegiado','$vencimento','$dataretirada','$salvadata')")) die ('Os dados não foram inseridos');
             header('Location: /protocolos/addprotocolos.php');
        }   

       
        
        
?> 


    











