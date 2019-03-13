<?php

$servername = "127.0.0.1";
$database = "protocolos";
$username = "root";
$password = "";
    
$conn = mysqli_connect($servername, $username, $password, $database);


// Recebe o valor enviado
$valor = $_GET['valor'];

 
// Procura titulos no banco relacionados ao valor

$sql=$conn->prepare("select id,encaminhamentocolegiado,nome,data,datavencimento from addprotocolos WHERE statusColeg=0 AND encaminhamentocolegiado LIKE '%".$valor."%' ORDER BY datavencimento ASC");
$sql->execute();
$sql->bind_result($id,$encaminhamentocolegiado,$nome,$data1,$vencimento1);

			echo "
			    <table>
			        <thead>
			            <tr>
			                <td>Encaminhamento</td>
			                <td>Requerente</td>
			                <td>Data</td>
			                <td>Data de Vencimento</td>
			                <td></td>
			            </tr>
			        </thead>

			        <tbody>
			";

			while($sql->fetch()){
			$datapostada1 = date("d/m/Y", strtotime ($data1)); 
			$datavencimento2 = date("d/m/Y", strtotime ($vencimento1));    

			  $dataapc = date("Y-m-d");
			  $timestaamp = strtotime("$dataapc +1days");
			  $dataaam = date("Y-m-d",$timestaamp);        

			  if ($dataaam >= $vencimento1){
			    echo "
			        <tr style='color: red;'>
			            <td >$encaminhamentocolegiado</td>
			            <td>$nome</td>
			            <td>$datapostada1</td>                            
			            <td>$datavencimento2</td>";?>
			           <td>
			              <button id="confirmar" onclick="estadoDocsProto(<?php echo $id; ?>)" style="cursor: pointer;">
			               <i class='fas fa-check-circle'></i>
			              </button>
			            </td>
			        </tr>
			 <?php  
			       
			    
			  }else {
			     echo "
			      <tr>
			          <td>$encaminhamentocolegiado</td>
			          <td>$nome</td>
			          <td>$datapostada1</td>                            
			          <td>$datavencimento2</td>" ;?>
			           <td>
			              <button id="confirmar" onclick="estadoDocsProto(<?php echo $id; ?>)" style="cursor: pointer;">
			               <i class='fas fa-check-circle'></i>
			              </button>
			            </td>
			        </tr>
			 <?php    
			      
			   
			  }
			}

			echo "
			    </tbody>
			</table>
			";
 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);

?>