<!DOCTYPE html>
<html>
<head>
	<title>Protocolos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">   
  <script src="https://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="menu.css" /> 
  <script type="text/javascript" src="js/funcs_baixaProtocolos.js"></script> 
</head>
<body>

  <div class="card mb-3 mt-1" style="width: 98%;left:1%;">
    <div class="card-header text-center" >

      <a href="menu.php" style="color: black;"><i class="fas fa-arrow-left" title="Voltar" style="float: left;font-size: 30px;"></i></a>
      <i class="fas fa-table "></i>
      Protocolos

    </div>

    <div class="card-body">    

      <div id="resultados">
        <?php 

include_once "..\conexao.php";        

        $sql=$mysqli->prepare('select id,encaminhamento,nome,data,datavencimento from addprotocolos WHERE status=1 ORDER BY datavencimento ASC');
        $sql->execute();
        $sql->bind_result($idProtocolos,$encaminhamento,$nome,$data,$vencimento);

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
            <button id="confirmar" style="cursor: pointer;" data-toggle="modal" data-target="#baixaModalProto<?php echo $idProtocolos ?>">
             <i class="fas fa-times" style="font-size: 20px;color: red;" title="Cancelar"></i>
           </button>
         </td>
       </tr>
       <!-- Baixas Protocolos-->

       <div class="modal fade" id="baixaModalProto<?php echo $idProtocolos ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo finalizar essa destinação?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="estadoProtocolos(<?php echo $idProtocolos ?>)">Finalizar</button>
          </div>
        </div>
      </div>
    </div>
    <?php                     
  }
?>
  </tbody>
  </table>
  
</div> 


</div>
</div>

</body>
</html>