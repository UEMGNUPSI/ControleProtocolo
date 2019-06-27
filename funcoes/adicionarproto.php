
<?php  

include_once "..\conexao.php";

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


$ra = $_POST['numra'];
$cursocolegiado = $_POST['cursocolegiado'];
$observacaocolegiado = $_POST['observacaocolegiado'];
$encaminhamentocolegiado = $_POST['encaminhamentocolegiado'];




if($vencimento=='5 dias'){    
   $conversao = strtotime($data);   

   $conversao2 =      date('Y-m-d',$conversao);
   $somadata =  strtotime("$conversao2 +5 days"); 


   $salvadata = date('Y-m-d',$somadata);    
}else if($vencimento == '3 dias'){          
   $conversao = strtotime($data);   
   $conversao2 = date('Y-m-d',$conversao);
   $somadata =  strtotime("$conversao2 + 3 days"); 

   $salvadata = date('Y-m-d',$somadata); 
         
}else{
    $vencimento == $salvadata;
}

$sql = $conn->query("SELECT * FROM addprotocolos WHERE  numproto='$numproto'");

if(mysqli_num_rows($sql) > 0){
    echo json_encode();               
} else {
     
    if(!$conn->query("INSERT INTO addprotocolos(numproto,nome,atendente,curso,historico,data,hora,observacao,ra,cursocolegiado,obsevacaocolegiado,encaminhamento,encaminhamentocolegiado,vencimento,datavencimento,status,statusColeg) VALUES ('$numproto','$nomeatendido','$nomeatendente','$curso','$historico','$data','$hora','$observacao','$ra','$cursocolegiado','$observacaocolegiado','$encaminhamento','$encaminhamentocolegiado','$vencimento','$salvadata','0','0')")) die ('Os dados não foram inseridos');
    echo json_encode();          

}   

?> 