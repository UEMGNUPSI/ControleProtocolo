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
    </script>
    <script type="text/javascript" src="pesquisa.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

    <script type="text/javascript">
      
      function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    } 
              
    </script> 
    <style type="text/css">
     #threquerente{
      width: 50%;
     }
     #th{
      width: 5%;
     }
     #thencaminhamento{
      width: 15%;
     }
      button{
        background-color: white;
        border-style: solid;
        border-color: white;
    </style>
      
          
</head>
<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="menu.php">Uemg</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

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
            <a class="dropdown-item" href="addcurso.php">Adicionar um curso</a>  
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
                <a class="dropdown-item" href="addprotocolos.php">Adicionar Protocolos</a>          
            
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
                  <a href="#">Encaminhamentos</a>
                </li>              
            </ol>

          <!-- Icon Cards-->
          <div class="row " >
            
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                   <i class="far fa-copy"></i>
                  </div>
                  <div class="mr-5">Entrega de Documentos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" onclick="Mudarestado('encaminhamentoDoc')">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
         
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="far fa-copy"></i>
                  </div>
                  <div class="mr-5">Colegiado</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" onclick="Mudarestado('encaminhamentoColegiado')">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="far fa-copy"></i>
                  </div>
                  <div class="mr-5">Protocolos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#" onclick="Mudarestado('encaminhamentoProto')">
                  <span class="float-left">Ver Detalhes</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

            
 
          </div>

          <div id="encaminhamentoDoc" style="display: none;">
             tabela encaminhamentos doc
          </div>

          <div id="encaminhamentoColegiado" style="display: none;">
            tabela encaminhamentos colegiado
          </div>


          <div id="encaminhamentoProto" style="display: none;">
             <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Protocolos
              </div>
            <div class="card-body">

              <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="post" action="">
                  <div class="input-group" >
                    <input type="text" class="form-control input-search" alt="lista-clientes" placeholder="Busca por..." name="pesquisa" id="pesquisa" >
                    <div class="input-group-append">
                      <button class="btn btn-primary mb-3" type="button">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
              </form>

               
              <div class="table-responsive">         
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th id="thencaminhamento">Encaminhamentos</th>
                      <th id="threquerente">Requerente</th>
                      <th id="th">Data do vencimento</th>                     
                      
                    </tr>
                  </thead>

                  
                   <?php 
                              
                        $servername = "127.0.0.1";
                        $database = "protocolos";
                        $username = "root";
                        $password = "";
                                        
                          $conn = mysqli_connect($servername, $username, $password, $database);
                                //Carrega os dados
                          $sql = "SELECT * FROM addprotocolos";
                          $consulta = mysqli_query($conn, $sql);
                            
                          while( $dados = mysqli_fetch_assoc($consulta)){                                    
                                echo "<tbody>"; ?>
                                <tr class="resultado">                             
                                <td>
                                  <a href="#" class="text-primary"><?php echo $dados['encaminhamento']; ?></a>
                                </td>
                               <?php 
                               echo "<td>" .$dados['nome']."</td>";
                                  $dt = $dados['datavencimento']; 
                                  $dtt = date('d/m/Y',strtotime($dt));                                              
                                echo "<td>" .$dtt."</td>";                                                            
                                
                                 
                              ?>
                                </tr>
                                </tbody>                         
                                
                    <?php } ?> 
                          <tr class="resultado"> 

                        </tr>                                                             
                </table>  
            </div>
          </div>  
        </div>
      </div>   
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