<?php

$servername = "127.0.0.1";
$database = "protocolos";
$username = "root";
$password = "";
    
$conn = mysqli_connect($servername, $username, $password, $database);


// Recebe o valor enviado
$valor = $_GET['valor'];


// Procura titulos no banco relacionados ao valor
$sql ="SELECT * FROM addentregaprotocolos WHERE encaminhamento LIKE '%".$valor."%' ";
$consulta = mysqli_query($conn,$sql); 
// Exibe todos os valores encontrados

echo  "
	    <table>
	        <thead>
	        <tr>
	            <td>Encaminhamento</td>
	            <td>Requerente</td>
	            <td>Data</td>
	            <td>Data de Vencimento</td>
	        </tr>
	        </thead>

	        <tbody>

	  ";
while ($noticias = mysqli_fetch_assoc($consulta)) {
	
	$encaminhamento = $noticias['encaminhamento'];
	$nome = $noticias['nome'];

	$datapostada = $noticias['data'];
	$date = date("d/m/Y", strtotime ($datapostada));

	$data = $noticias['datavencimento'];
	$datavencimento = date("d/m/Y", strtotime ($data));
	

	$dataapc = date("Y-m-d");
    $timestaamp = strtotime("$dataapc +1days");
    $dataaam = date("Y-m-d",$timestaamp);        
                    
    if ($dataaam >= $datavencimento){
       echo "
            <tr style='color: red;'>
            <td >$encaminhamento</td>
            <td>$nome</td>
            <td>$date</td>                            
            <td>$datavencimento</td>
            </tr>
       ";
    }else {
        echo "
            <tr>
            <td>$encaminhamento</td>
            <td>$nome</td>
            <td>$date</td>                            
            <td>$datavencimento</td>
            </tr>            
        ";
        }
}
 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);

?>