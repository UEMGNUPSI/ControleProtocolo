<?php include_once "conexao.php"; ?>
<?php

// Recebe o valor enviado
$valor = $_GET['valor'];
 
// Procura titulos no banco relacionados ao valor
$sql=$conn->prepare("select id,encaminhamento,nome,data,datavencimento from addprotocolos WHERE status=0 AND encaminhamento LIKE '%".$valor."%' ORDER BY datavencimento ASC");
$sql->execute();
$sql->bind_result($id,$encaminhamento,$nome,$data2,$vencimento2);

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
                    $datapostada2 = date("d/m/Y", strtotime ($data2)); 
                    $datavencimento = date("d/m/Y", strtotime ($vencimento2));    
                      
                      $dataapc = date("Y-m-d");
                      $timestaamp = strtotime("$dataapc +1days");
                      $dataaam = date("Y-m-d",$timestaamp);        
                    
                      if ($dataaam >= $vencimento2){
                        echo "
                            <tr style='color: red;'>
                                <td >$encaminhamento</td>
                                <td>$nome</td>
                                <td>$datapostada2</td>                            
                                <td>$datavencimento</td>";?>
                               <td>
                                  <button id="confirmar" onclick="estadoProto(<?php echo $id; ?>)" style="cursor: pointer;">
                                   <i class='fas fa-check-circle'></i>
                                  </button>
                                </td>
                            </tr>
                     <?php  
                      }else {
                         echo "
                          <tr>
                              <td>$encaminhamento</td>
                              <td>$nome</td>
                              <td>$datapostada2</td>                            
                              <td>$datavencimento</td>
                          ";?>
                               <td>
                                  <button id="confirmar" onclick="estadoProto(<?php echo $id; ?>)" style="cursor: pointer;">
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