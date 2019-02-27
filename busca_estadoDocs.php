<?php 

$servername = "127.0.0.1";
$database = "protocolos";
$username = "root";
$password = "";
    
$conn = mysqli_connect($servername, $username, $password, $database);


// Recebe o valor enviado
$id_estado = $_GET['valor'];

// Procura titulos no banco relacionados ao valor
$sqli ="UPDATE addentregaprotocolos SET status= 1 WHERE id='$id_estado'";
$consulta = mysqli_query($conn,$sqli); 
// Exibe todos os valores encontrados
$sql=$conn->prepare('select id,encaminhamento,nome,data,datavencimento from addentregaprotocolos WHERE status=0 ORDER BY datavencimento ASC');
$sql->execute();
$sql->bind_result($id,$encaminhamento,$nome,$data,$vencimento);

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
            </thead
          <tbody>
                    ";

                    while($sql->fetch()){
                      $datapostada = date("d/m/Y", strtotime ($data)); 
                      $datavencimento3 = date("d/m/Y", strtotime ($vencimento));      

                      $dataapc = date("Y-m-d");
                      $timestaamp = strtotime("$dataapc +1days");
                      $dataaam = date("Y-m-d",$timestaamp);  

                       echo "
                          <tr>
                              <td>$encaminhamento</td>
                              <td>$nome</td>
                              <td>$datapostada</td>                            
                              <td>$datavencimento3</td>
                              <td>  "; ?>
                                  <button id="confirmar" onclick="estadoDocs(<?php echo $id; ?>)" style="cursor: pointer;">
                                   <i class='fas fa-check-circle'></i>
                                  </button>
                                </td>
                            </tr>
                      <?php  
                      }                         
 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);


 ?>