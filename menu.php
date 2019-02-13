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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">   
    <script src="https://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/card.js"></script>
    <script type="text/javascript" src="js/funcs.js"></script>
    <script type="text/javascript" src="js/funcs_coleg.js"></script>
    <script type="text/javascript" src="js/funcs_docs.js"></script> 


</head>
<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="menu.php">Uemg</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        
      </button>

       <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">        
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle text-white" href="menu.php" id="userDropdown" role="button" >
                Início
              </a>
            </li>
        </ul>
       </form>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">        
        <ul class="navbar-nav ml-auto ml-md-0">
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user-circle fa-fw"></i>
             </a>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
           </div>
         </li>
        </ul>
          </div>
        </div>
      </form>

      <!-- Navbar -->
     

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-folder-open" aria-hidden="true"></i>
            <span>Cursos e <br> Encaminhamentos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
            <a class="dropdown-item" href="listacursos.php">Lista de Cursos</a>            
            <div class="dropdown-divider"></div>            
            <a class="dropdown-item" href="addcurso.php">Adicionar curso</a>  
            <div class="dropdown-divider"></div> 
            <a class="dropdown-item" href="listaencaminahmento.php">Lista de <br>Encaminhamento</a>            
            <div class="dropdown-divider"></div>            
            <a class="dropdown-item" href="addencaminhamento.php">Adicionar um <br>Encaminhamento</a>          
          </div>
        </li>

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>Adicionar Protocolos</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
            <a class="dropdown-item" href="verificaprotocolos.php">Verficar Protocolos</a>  

                <div class="dropdown-divider"></div>            
                <a class="dropdown-item" href="addprotocolos.php">Registrar Protocolos</a>          
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>Protocolo de Entrega de Documentos</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
            <a class="dropdown-item" href="verficaentregaproto.php">Verficar Entrega de <br> Documentos</a>  

                <div class="dropdown-divider"></div>            
                <a class="dropdown-item" href="addentregaproto.php">Adicionar Entrega de <br> Documentos</a>          
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>Entrega do Certificado de Pós e Solicitação <br> de Diplomas</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
            <a class="dropdown-item" href="verificacertificados.php">Verficar Certificados</a>  

                <div class="dropdown-divider"></div>            
                <a class="dropdown-item" href="addcertificado.php">Adicionar Certificados</a>

                <div class="dropdown-divider"></div>            
                <a class="dropdown-item" href="verificadiploma.php">Verificar Solicitações</a>

                <div class="dropdown-divider"></div>            
                <a class="dropdown-item" href="solicitacaodiploma.php">Adicionar Solicitações</a>          
            
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="doccolegiado.php">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>Documentos do Colegiado</span></a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link" href="pastainfo.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pasta de Informações</span></a>
        </li>

      </ul>   
       
  <div id="content-wrapper">

        <div class="container-fluid ml-3">
          
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <i class="fas fa-table mr-1"></i>Encaminhamentos
                </li>              
            </ol>
  <div class="content"> 
  <?php 
                    
                    $servername = "127.0.0.1";
                    $database = "protocolos";
                    $username = "root";
                    $password = "";
                                     
                      $conn = mysqli_connect($servername, $username, $password, $database);
                      $datapc = date("Y-m-d");
                      $timestamp = strtotime("$datapc +1days");
                      $dataam = date("Y-m-d",$timestamp);
                            //Carrega os dados
                      $sql = "SELECT * FROM addentregaprotocolos WHERE datavencimento = '$dataam' ";
                      $consulta = mysqli_query($conn, $sql);
                      $dados = mysqli_fetch_assoc($consulta);
          ?>  
          <!-- Icon Cards-->
        
          <div class="row " >
           
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white <?php if (!$dados==NULL){ echo "bg-danger";} else {echo "bg-primary";} ?> o-hidden h-100">
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
                      $dataam = date("Y-m-d",$timestamp);
                            //Carrega os dados
                      $sql = "SELECT * FROM addprotocolos WHERE datavencimento = '$dataam' ";
                      $consultaa = mysqli_query($conn, $sql);
                      $dadoss = mysqli_fetch_assoc($consultaa);
          ?>     
            <div class="col-xl-3 col-sm-6 mb-3">

              <div class="card text-white <?php if (!$dadoss==NULL){echo "bg-danger";}else {echo "bg-primary";} ?> hidden h-100">
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

            <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white <?php if (!$dadoss==NULL){echo "bg-danger";}else {echo "bg-primary";} ?> hidden h-100">
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

                <form class="form-inline mb-3"  >
                    <input class="form-control" type="search" placeholder="Buscar..." id="buscaDocs" onkeyup="buscarDocumentos(this.value)">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <div id="resultadoDocs">
                  <?php 
                    $servidor="localhost";
                    $usuario="root";
                    $senha="";
                    $bancodedados="protocolos";

                    $mysqli=new mysqli($servidor,$usuario,$senha,$bancodedados);                  

                    $sql=$mysqli->prepare('select encaminhamento,nome,data,datavencimento from addentregaprotocolos ORDER BY data DESC');
                    $sql->execute();
                    $sql->bind_result($encaminhamento,$nome,$data,$vencimento);

                    echo "
                        <table>
                            <thead>
                                <tr>
                                    <td >Encaminhamento</td>
                                    <td>Requerente</td>
                                    <td>Data</td>
                                    <td>Data de Vencimento</td>
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
                    
                      if ($dataaam >= $vencimento){
                        echo "
                            <tr style='color: red;'>
                                <td >$encaminhamento</td>
                                <td>$nome</td>
                                <td>$datapostada</td>                            
                                <td>$datavencimento3</td>
                            </tr>
                        ";
                      }else {
                         echo "
                          <tr>
                              <td>$encaminhamento</td>
                              <td>$nome</td>
                              <td>$datapostada</td>                            
                              <td>$datavencimento3</td>
                          </tr>
                        ";
                      }
                    }

                    echo "
                        </tbody>
                    </table>
                    ";
                    

                    ?>
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
              
                <form class="form-inline mb-3">
                    <input class="form-control" type="search" placeholder="Buscar..." id="buscaColeg"  onkeyup="buscarColegiado(this.value)">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </form>
              
                <div id="resultado1">
                  <?php 
                    $servidor="localhost";
                    $usuario="root";
                    $senha="";
                    $bancodedados="protocolos";

                    $mysqli=new mysqli($servidor,$usuario,$senha,$bancodedados);                  

                    $sql=$mysqli->prepare('select encaminhamentocolegiado,nome,data,datavencimento from addprotocolos ORDER BY data DESC');
                    $sql->execute();
                    $sql->bind_result($encaminhamentocolegiado,$nome,$data1,$vencimento1);

                    echo "
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
                                <td>$datavencimento2</td>
                            </tr>
                        ";
                      }else {
                         echo "
                          <tr>
                              <td>$encaminhamentocolegiado</td>
                              <td>$nome</td>
                              <td>$datapostada1</td>                            
                              <td>$datavencimento2</td>
                          </tr>
                        ";
                      }
                    }

                    echo "
                        </tbody>
                    </table>
                    ";
                      ?>
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

                 <form class="form-inline mb-3" >
                    <input class="form-control" type="search" placeholder="Buscar..." id="busca" onkeyup="buscarNoticias(this.value)">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <div id="resultado">
                  <?php 
                    $servidor="localhost";
                    $usuario="root";
                    $senha="";
                    $bancodedados="protocolos";

                    $mysqli=new mysqli($servidor,$usuario,$senha,$bancodedados);                  

                    $sql=$mysqli->prepare('select encaminhamento,nome,data,datavencimento from addprotocolos ORDER BY data DESC');
                    $sql->execute();
                    $sql->bind_result($encaminhamento,$nome,$data2,$vencimento2);

                    echo "
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
                                <td>$datapostada</td>                            
                                <td>$datavencimento</td>
                            </tr>
                        ";
                      }else {
                         echo "
                          <tr>
                              <td>$encaminhamento</td>
                              <td>$nome</td>
                              <td>$datapostada</td>                            
                              <td>$datavencimento</td>
                          </tr>
                        ";
                      }
                    }

                    echo "
                        </tbody>
                    </table>
                    "; ?>
                </div>             
          </div>  
        </div>
      </div>   
       
  <!--    Gerando Relatorio colegiado   -->
      
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Gerar Relatório Colegiado
            </div>
    <div class="row mb-3 justifiy-content-center">
      
      <div class="col-sm-12 col-md-12 col-lg-12" id="escrever">
       
        <form  id="formulario" method="post" action="buscar_relatorio.php" >
          
          <div class="form-row ml-5 mt-3">

            <div class="form-group col-sm-2 ">
            <!--Data Inicial -->
             <label for="inicial">Data Inicial:</label>
             <input type="date" class="form-control"  name="inicial" id="inicial" >
            
            </div>

            <div class="form-group col-sm-2 ">
            <!-- Data Final -->
            <label for="final">Data Final:</label>
              <input type="date" class="form-control"  name="final" id="final">
            
            </div>
          </div>

            <div class="form-row ml-5">

          <div class="form-group col-sm-4">
              
              <label for="curso">Curso:</label>
              <select  class="form-control" name="curso" id="curso">

                <option selected>Selecione...</option>

                     <?php 
                              
                        $servername = "127.0.0.1";
                        $database = "protocolos";
                        $username = "root";
                        $password = "";
                                         
                          $conn = mysqli_connect($servername, $username, $password, $database);
                                //Carrega os dados
                          $sql = "SELECT * FROM curso";
                          $consulta = mysqli_query($conn, $sql);

                          while( $dados = mysqli_fetch_assoc($consulta)){                                    
                                
                                echo "<option>".$dados['curso']."</option>";                              
                           }     
                     ?>        
                     
              </select>

            </div>
          </div>

            <div class="form-row ml-5">
             <div class="form-group col-sm-3 ">
           
             <button type="submit" class="btn btn-primary" >Gerar Relatório</button>   
          
            </div>             
          </div>
        
        </form>
        <?php 
  
          if (isset($_GET['modal'])) { 
            $modal = $_GET['modal'];
            $curso = $_GET['curso'];

             if($modal != 0){            
              echo "</br>Foram encontrados $modal resultados para o curso: $curso.Para gerar o PDF<a target='_blanck' href='gerar_pdf.php?curso=$curso'> clique aqui!</a>  ";
             }else 
              echo "Não foi encontrado nenhuma atividade neste curso durante o período especificado!";        
          }
            ?>
      </div>
    </div>
  
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione o logout para encerrrar sua atividade.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
   

  </body>

</html>