<?php 

$servername = "127.0.0.1";
$database = "protocolos";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


	// Recebe o valor enviado
$id_estado = $_GET['valor'];

	// Procura titulos no banco relacionados ao valor
$sqli ="UPDATE addprotocolos SET statusColeg= 0 WHERE id='$id_estado'";
$consulta = mysqli_query($conn,$sqli); 
	// Exibe todos os valores encontrados
$sql=$conn->prepare('select id,encaminhamento,nome,data,datavencimento from addprotocolos WHERE statusColeg=1 ORDER BY datavencimento ASC');
$sql->execute();
$sql->bind_result($idColeg,$encaminhamento,$nome,$data,$vencimento);

echo "
<table>
<thead>
<tr>
<td >Encaminhamento</td>
<td>Requerente</td>
<td>Data</td>
<td>Data de Vencimento</td>
<td></td>
</tr>
</thead>

<tbody>
";

while($sql->fetch()){
  $datapostada = date("d/m/Y", strtotime ($data)); 
  $datavencimento3 = date("d/m/Y", strtotime ($vencimento));      

  $dataapc = date("Y-m-d");
  $timestaamp = strtotime("$dataapc +1days");
  $dataaam = date("Y-m-d",$timestaamp);        


  echo "
  <tr >
  <td>$encaminhamento</td>
  <td>$nome</td>
  <td>$datapostada</td>                            
  <td>$datavencimento3</td>"; ?>
  <td>
    <button id="confirmar" data-toggle="modal" data-target="#baixaModalColeg<?php echo $idColeg ?>" style="cursor: pointer;">
     <i class="fas fa-times" style="font-size: 20px;color: red;" title="Cancelar"></i>
   </button>
 </td>
</tr>

<div class="modal fade" id="baixaModalColeg<?php echo $idColeg ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo anular esta destinação?</h5>
       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-footer">
      <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
      <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="estadoColeg(<?php echo $idColeg ?>)">Anular</button>
    </div>
  </div>
</div>
</div>

<?php                     
}
echo "
</tbody>
</table>
";

?>