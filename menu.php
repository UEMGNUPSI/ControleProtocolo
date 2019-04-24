<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Protocolos</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="menu.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/card.js"></script>
  <script type="text/javascript" src="js/funcs.js"></script>
  <script type="text/javascript" src="js/funcs_coleg.js"></script>
  <script type="text/javascript" src="js/funcs_docs.js"></script>
  <script type="text/javascript" src="js/funcs_estado.js"></script>
  <script type="text/javascript" src="js/funcs_estadoProto.js"></script>
  <script type="text/javascript" src="js/funcs_estadoProtocolos.js"></script>


</head>

<body id="page-top">

  


   <?php include_once "funções/navbar.php"; ?>


  

  <div id="wrapper">

    <!--Começo Sidebar -->
    <?php include_once 'side_bar.php'; ?>
    <!-- Final SideBar -->
    <div id="content-wrapper">

      <div class="container-fluid ml-3">
         
      <div class="card-header text-center mb-3 mt-1" >
            
      Encaminhamentos
          </div>
        <!-- <ol class="breadcrumb text-center">
          <li class="breadcrumb-item">
            Encaminhamentos
          </li>
        </ol> -->
        
        <div class="content">
          <?php
          $datapc = date("Y-m-d");
          $timestamp = strtotime("$datapc +1days");
          $dataam = date("Y-m-d", $timestamp);
          //Carrega os dados
          $sql = "SELECT * FROM addentregaprotocolos WHERE status= 0 AND datavencimento <= '$dataam' ";
          $consulta = mysqli_query($conn, $sql);
          $dados = mysqli_fetch_assoc($consulta);
          ?>
          <!-- Icon Cards-->

          <div class="row" style="justify-content: center;">

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white <?php if (!$dados == NULL) {
                                            echo "bg-danger";
                                          } else {
                                            echo "bg-primary";
                                          } ?> o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="far fa-copy"></i>
                  </div>
                  <div class="mr-5">Entrega de Documentos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" onclick="Mudarestado(true, false, false)">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

            <?php


            $datapc = date("Y-m-d");
            $timestamp = strtotime("$datapc +1days");
            $dataam = date("Y-m-d", $timestamp);
            //Carrega os dados
            $sql = "SELECT * FROM addprotocolos WHERE statusColeg= 0 AND datavencimento <= '$dataam' ";
            $consultaa = mysqli_query($conn, $sql);
            $dadoss = mysqli_fetch_assoc($consultaa);
            ?>
            <div class="col-xl-3 col-sm-6 mb-3">

              <div class="card text-white <?php if (!$dadoss == NULL) {
                                            echo "bg-danger";
                                          } else {
                                            echo "bg-primary";
                                          } ?> hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="mr-5">Colegiado</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" onclick="Mudarestado(false, true, false)">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

            <?php


            $datapc = date("Y-m-d");
            $timestamp = strtotime("$datapc +1days");
            $dataam = date("Y-m-d", $timestamp);
            //Carrega os dados
            $sql = "SELECT * FROM addprotocolos WHERE status= 0 AND datavencimento <= '$dataam' ";
            $consultaa = mysqli_query($conn, $sql);
            $dadoss = mysqli_fetch_assoc($consultaa);
            ?>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white <?php if (!$dadoss == NULL) {
                                            echo "bg-danger";
                                          } else {
                                            echo "bg-primary";
                                          } ?> hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fab fa-leanpub"></i>
                  </div>
                  <div class="mr-5">Protocolos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" onclick="Mudarestado(false, false, true)">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--------------------------------------------------------- Entrega de Documentos ----------------------------------------->
        <div id="encaminhamentoDoc" style="display: none;">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Entrega de Documentos
            </div>

            <div class="card-body">

              <form class="form-group mb-3">
                <input class="form-control" type="search" placeholder="Buscar..." id="buscaDocs" onkeyup="buscarDocumentos(this.value)" style="display: inline;width: 15%;">
                <button class="btn btn-primary " type="submit" style="float: right;" formaction="baixasxentregaproto.php">Ver Encaminhamentos</button>
              </form>

              <div id="resultadoDocs">
                <?php

                 $servername = "10.93.10.10";
        $database = "protocolos";
        $username = "protocolos";
        $password = "protocolos*01";

                $mysqli = new mysqli($servername, $username, $password, $database);

                $sql = $mysqli->prepare('select id,encaminhamento,nome,data,datavencimento from addentregaprotocolos WHERE status=0 ORDER BY datavencimento ASC');
                $sql->execute();
                $sql->bind_result($idDocs, $encaminhamento, $nome, $data, $vencimento);

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

                while ($sql->fetch()) {
                  $datapostada = date("d/m/Y", strtotime($data));
                  $datavencimento3 = date("d/m/Y", strtotime($vencimento));

                  $dataapc = date("Y-m-d");
                  $timestaamp = strtotime("$dataapc +1days");
                  $dataaam = date("Y-m-d", $timestaamp);

                  if ($dataaam >= $vencimento) {
                    echo "
              <tr style='color: red;'>
              <td>$encaminhamento</td>
              <td>$nome</td>
              <td>$datapostada</td>                            
              <td>$datavencimento3</td>"; ?>
                    <td>

                      <button id="confirmar" style="cursor: pointer;" data-toggle="modal" data-target="#baixaModal<?php echo $idDocs ?>">
                        <i class='fas fa-check-circle'></i>
                      </button>
                    </td>
                    </tr>
                    <div class="modal fade" id="baixaModal<?php echo $idDocs ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo finalizar essa destinação?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="estadoDocs(<?php echo $idDocs ?>)">Finalizar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                } else {
                  echo "
         <tr>
         <td>$encaminhamento</td>
         <td>$nome</td>
         <td>$datapostada</td>                            
         <td>$datavencimento3</td> "; ?>
                    <td>
                      <button id="confirmar" style="cursor: pointer;" data-toggle="modal" data-target="#baixaModal<?php echo $idDocs ?>">
                        <i class='fas fa-check-circle'></i>
                      </button>

                    </td>
                    </tr>
                    <div class="modal fade" id="baixaModal<?php echo $idDocs ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="estadoDocs(<?php echo $idDocs ?>)">Finalizar</button>
                          </div>
                        </div>
                      </div>
                    </div>


                  <?php } ?>


                <?php } ?>


                </tbody>
                </table>



              </div>
            </div>
          </div>
        </div>

        <!--------------------------------------------------------- Colegiado ----------------------------------------->
        <div id="encaminhamentoColegiado" style="display: none;">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Colegiado
            </div>

            <div class="card-body">

              <form class="form-group mb-3">
                <input class="form-control" type="search" placeholder="Buscar..." id="buscaColeg" onkeyup="buscarColegiado(this.value)" style="display: inline;width: 15%;">
                <button class="btn btn-primary " type="submit" style="float: right;" formaction="baixasColegiado.php">Ver Encaminhamentos</button>
              </form>


              <div id="resultado1">
                <?php
                 $servername = "10.93.10.10";
        $database = "protocolos";
        $username = "protocolos";
        $password = "protocolos*01";

                $mysqli = new mysqli($servername, $username, $password, $database);

                $sql = $mysqli->prepare('select id,encaminhamentocolegiado,nome,data,datavencimento from addprotocolos WHERE statusColeg=0 ORDER BY datavencimento ASC');
                $sql->execute();
                $sql->bind_result($idColeg, $encaminhamentocolegiado, $nome, $data1, $vencimento1);

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

                while ($sql->fetch()) {
                  $datapostada1 = date("d/m/Y", strtotime($data1));
                  $datavencimento2 = date("d/m/Y", strtotime($vencimento1));

                  $dataapc = date("Y-m-d");
                  $timestaamp = strtotime("$dataapc +1days");
                  $dataaam = date("Y-m-d", $timestaamp);

                  if ($dataaam >= $vencimento1) {
                    echo "
          <tr style='color: red;'>
          <td >$encaminhamentocolegiado</td>
          <td>$nome</td>
          <td>$datapostada1</td>                            
          <td>$datavencimento2</td>"; ?>
                    <td>
                      <button id="confirmar" style="cursor: pointer;" data-toggle="modal" data-target="#baixaModalColeg<?php echo $idColeg ?>">
                        <i class='fas fa-check-circle'></i>
                      </button>
                    </td>
                    </tr>
                    <!-- Baixas Colegiado-->

                    <div class="modal fade" id="baixaModalColeg<?php echo $idColeg ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo finalizar essa destinação?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="estadoDocsProto(<?php echo $idColeg ?>)">Finalizar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php


                } else {
                  echo "
   <tr>
   <td>$encaminhamentocolegiado</td>
   <td>$nome</td>
   <td>$datapostada1</td>                            
   <td>$datavencimento2</td>"; ?>
                    <td>
                      <button id="confirmar" style="cursor: pointer;" data-toggle="modal" data-target="#baixaModalColeg<?php echo $idColeg ?>">
                        <i class='fas fa-check-circle'></i>
                      </button>
                    </td>
                    </tr>
                    <!-- Baixas Colegiado-->

                    <div class="modal fade" id="baixaModalColeg<?php echo $idColeg ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo finalizar essa destinação?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="estadoDocsProto(<?php echo $idColeg ?>)">Finalizar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php
                }
              }
              ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!---------------------------------------------------------Protocolos----------------------------------------->
        <div id="encaminhamentoProto" style="display: none;">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Protocolos
            </div>

            <div class="card-body">

              <form class="form-group mb-3">
                <input class="form-control" type="search" placeholder="Buscar..." id="busca" onkeyup="buscarNoticias(this.value)" style="display: inline;width: 15%;">
                <button class="btn btn-primary " type="submit" style="float: right;" formaction="baixasProtocolos.php">Ver Encaminhamentos</button>
              </form>

              <div id="resultado">
                <?php
               $servername = "10.93.10.10";
        $database = "protocolos";
        $username = "protocolos";
        $password = "protocolos*01";

                $mysqli = new mysqli($servername, $username, $password, $database);

                $sql = $mysqli->prepare('select id,encaminhamento,nome,data,datavencimento from addprotocolos WHERE status=0 ORDER BY datavencimento ASC');
                $sql->execute();
                $sql->bind_result($idProtocolos, $encaminhamento, $nome, $data2, $vencimento2);

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

                while ($sql->fetch()) {
                  $datapostada2 = date("d/m/Y", strtotime($data2));
                  $datavencimento = date("d/m/Y", strtotime($vencimento2));

                  $dataapc = date("Y-m-d");
                  $timestaamp = strtotime("$dataapc +1days");
                  $dataaam = date("Y-m-d", $timestaamp);

                  if ($dataaam >= $vencimento2) {
                    echo "
          <tr style='color: red;'>
          <td >$encaminhamento</td>
          <td>$nome</td>
          <td>$datapostada</td>                            
          <td>$datavencimento</td>"; ?>
                    <td>
                      <button id="confirmar" style="cursor: pointer;" data-toggle="modal" data-target="#baixaModalProto<?php echo $idProtocolos ?>">
                        <i class='fas fa-check-circle'></i>
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
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="estadoProto(<?php echo $idProtocolos ?>)">Finalizar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php
                } else {
                  echo "
       <tr>
       <td>$encaminhamento</td>
       <td>$nome</td>
       <td>$datapostada</td>                            
       <td>$datavencimento</td>
       "; ?>
                    <td>
                      <button id="confirmar" style="cursor: pointer;" data-toggle="modal" data-target="#baixaModalProto<?php echo $idProtocolos ?>">
                        <i class='fas fa-check-circle'></i>
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
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn-primary" type="button" data-dismiss="modal" onclick="estadoProto(<?php echo $idProtocolos ?>)">Finalizar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php
                }
              }
              ?>

                </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>

        <!--    Gerando Relatorio colegiado   -->

        <div class="card mb-3">
          <div class="card-header text-center">
            
            Relatório Colegiado
          </div>
          <div class="row mb-3 justifiy-content-center">

            <div class="col-sm-12 col-md-12 col-lg-12" id="escrever">

              <form id="formulario" method="post" action="buscar_relatorio.php">

                <div class="form-row ml-5 mt-3">

                  <div class="form-group col-sm-2 ">
                    <!--Data Inicial -->
                    <label for="inicial">Data Inicial:</label>
                    <input type="date" class="form-control" name="inicial" id="inicial">

                  </div>

                  <div class="form-group col-sm-2 ">
                    <!-- Data Final -->
                    <label for="final">Data Final:</label>
                    <input type="date" class="form-control" name="final" id="final">

                  </div>
                </div>

                <div class="form-row ml-5">

                  <div class="form-group col-sm-4">

                    <label for="curso">Curso:</label>
                    <select class="form-control" name="curso" id="curso">

                      <option selected>Selecione...</option>

                      <?php

                      
                      //Carrega os dados
                      $sql = "SELECT * FROM curso";
                      $consulta = mysqli_query($conn, $sql);

                      while ($dados = mysqli_fetch_assoc($consulta)) {

                        echo "<option>" . $dados['curso'] . "</option>";
                      }
                      ?>

                    </select>

                  </div>
                </div>

                <div class="form-row ml-5">
                  <div class="form-group col-sm-3 ">

                    <button type="submit" class="btn btn-primary">Gerar Relatório</button>

                  </div>
                </div>

              </form>
              <?php

              if (isset($_GET['modal'])) {
                $modal = $_GET['modal'];
                $curso = $_GET['curso'];

                if ($modal != 0) {
                  echo "<p class='ml-5'>Foram encontrados $modal resultados para o curso: $curso.Para gerar o PDF<a target='_blanck' href='gerar_pdf.php?curso=$curso'> clique aqui!</p> ";
                } else
                  echo "<p class='ml-5'>Não foi encontrado nenhuma atividade neste curso durante o período especificado!</p>";
              }
              ?>
            </div>
          </div>

          <!-- Logout Modal-->
          <?php include_once "funções/logout.php" ;?>


</body>

</html>