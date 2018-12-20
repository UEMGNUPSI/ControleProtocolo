<?php 
	require_once __DIR__ . '/vendor/autoload.php';
	use Mpdf \ Mpdf;

	$mpdf = new mPDF();

	$servername = "127.0.0.1";
    $database = "protocolos";
    $username = "root";
    $password = "";

    $id=$_GET['id'];
                              
    $conn = mysqli_connect($servername, $username, $password, $database);
        //Carrega os dados
    $sql = "SELECT * FROM addprotocolos WHERE id='$id'";
    $consulta = mysqli_query($conn, $sql);                            
    $dados = mysqli_fetch_assoc($consulta);                                                             
                                

	$html = "
		<!DOCTYPE html>
		<head>
		    <meta charset='utf-8'>
		    <title>Documentação</title>		    
			<style type=\'text/css\''>	

				img{
					margin-bottom: 20px;
					width: 100%;					
				}				
				h1{					
					text-align: center;
				}
				p{					
					margin-bottom: 5px;
				}
			</style>';		    
	    </head>
	    <body>
			<img src='uemg.png'>
		 	<h1>Documentação</h1>
			
			 	<p>Número de Protocolo:".$dados['numproto']."</p>
			 	<p>Requerente:".$dados['nome']."</p>
			 	<p>Atendente:".$dados['atendente']."</p>
			 	<p>Curso:".$dados['curso']."</p>
			 	<p>Data:".$dados['data']."</p>
			 	<p>Hora:".$dados['hora']."</p>
			 	<p>Histórico:".$dados['historico']."</p>
			 	<p>Observação:".$dados['observacao']."</p>				
		 	
		 </body>		
		 ";		
		 
	$mpdf->SetDisplayMode('fullpage');		
	$mpdf->WriteHTML($html);
	$mpdf->Output();

	exit;
?>

