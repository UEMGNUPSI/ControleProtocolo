<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Protocolos</title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="menu.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body id="page-top">

   <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <i class="fas fa-university text-light mr-1"></i>
      <a class="navbar-brand mr-1" href="menu.php">Uemg</a>

     
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
            <a class="dropdown-item" href="addcurso.php">Adicionar um curso</a>  
            <div class="dropdown-divider"></div> 
            <a class="dropdown-item" href="listaencaminahmento.php">Lista de <br>Encaminhamento</a>            
            <div class="dropdown-divider"></div>            
            <a class="dropdown-item" href="addencaminhamento.php">Adicionar um <br>Encaminahmento</a>               
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

        <div class="container-fluid">  

          <div class="row mb-5 justifiy-content-center">
      
            <div class="col-sm-12 col-md-10 col-lg-8">
   
       <div class="row">

      <div class="col-12 text-center my-5">
        <h1 class="display-4"><i class="fa fa-paper-plane text-primary mr-3" aria-hidden="true"></i>Cadastro de Protocolos</h1>
      </div>
    </div>
    
    
        
        <form method="post" action="funções/adicionarproto.php">
          
          <div class="form-row ml-5">

            <div class="form-group col-sm-5 " >
            
              <label for="inputNumProto">Número Protocolo:</label>
              <input type="text" class="form-control"  id="inputNumProto" name="numproto" placeholder="Digite número do protocolo" required="" >
                        
            </div>

           <div class="form-group col-sm-2 " >
               <label for="NumProto"></label>
               <input type="submit" class="form-control"  id="NumProto" name="numproto" value="Gerar N°" required="" >             
            </div>

            <div class="form-group col-sm-5">
            
              <label for="inputNomeAtendente">Atendente:</label>
              <input type="text" class="form-control" id="inputNomeAtendetne" name="nomeatendente" placeholder="Digite o nome Atendente" required="">
            
            </div>

          </div>

           <div class="form-row ml-5">

                <div class="form-group col-sm-6 ">

                  <label for="inputNomeAten">Requerente:</label>
                  <input type="text" class="form-control" id="inputNomeAten" name="nomeatendido" placeholder="Digite o nome" required="">

                </div>

              <div class="form-group col-sm-6">
              
              <label for="inputEncaminhamento">Encaminhamento:</label>
              <select id="inputEncaminhamento" class="form-control" name="encaminhamento">

                <option selected>Selecione...</option>

                     <?php 
                              
                        $servername = "127.0.0.1";
                        $database = "protocolos";
                        $username = "root";
                        $password = "";
                                         
                          $conn = mysqli_connect($servername, $username, $password, $database);
                                //Carrega os dados
                          $sql = "SELECT * FROM encaminhamento";
                          $consulta = mysqli_query($conn, $sql);

                          while( $dados = mysqli_fetch_assoc($consulta)){                                    
                                
                                echo "<option>".utf8_encode($dados['encaminhamento'])."</option>";                              
                           }     
                     ?>         
                     
              </select>

            </div>

          </div>

          <div class="form-row ml-5">

            <div class="form-group col-sm-6">
              
              <label for="inputData">Data</label>
              <input type="date" class="form-control" id="inputData" name="data" required="">

            </div>            

        
            <div class="form-group col-sm-6">
              
              <label for="inputHora">Hora:</label>
              <input type="time" class="form-control" id="inputHora" name="hora" required="">

            </div>
          </div>

            <div class="form-row ml-5">

          <div class="form-group col-sm-6">
              
              <label for="inputVencimento">Vencimento em:</label>
              <select id="inputVencimento" class="form-control" name="vencimento">

                <option selected>Selecione...</option>
                 <option>3 dias</option>
                  <option>5 dias</option>
                   
                     
              </select>

            </div>
            

            <div class="form-group col-sm-6">
              
              <label for="inputRetirada">Data de Retirada:</label>
              <input type="date" id="inputRetirada" class="form-control" name="retirada" required="" placeholder="">

            </div>  

          </div> 

          <div class="form-row ml-5">

          <div class="form-group col-sm-6">
              
              <label for="inputCurso">Curso:</label>
              <select id="inputCurso" class="form-control" name="curso">

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
            

            <div class="form-group col-sm-6">
              
              <label for="inputHistorico">Histórico:</label>
              <input type="text" id="inputHistorico" class="form-control" name="historico" required="" placeholder="">

            </div>  

          </div>          

          <div class="form-row ml-5">
            
            <div class="form-group col-sm-12 ">

              <label for="inputObservacao">Observação:</label>
              <textarea class="form-control" id="inputObservacao" name="observacao"></textarea>

            </div>



          </div> 
        


              
    <div class="row">

      <div class="col-12 text-center my-5">
        <h1 class="display-4"><i class="fa fa-paper-plane text-primary mr-3" aria-hidden="true"></i>Cadastro de Colegiado</h1>
      </div>
    </div>
        <div class="form-row ml-5">

            <div class="form-group col-sm-4 ">
             
              <label for="inputNumRA">Número RA:</label>
              <input type="text" class="form-control" id="inputNumra" name="numra" placeholder="Digite número do RA" required="">
            
            </div>
    
    

          <div class="form-group col-sm-4">
              
              <label for="inputCursocolegiado">Curso:</label>
              <select id="inputCursocolegiado" class="form-control" name="cursocolegiado">

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

            <div class="form-group col-sm-4">
              
                          <label for="inputEncaminhamentoColegiado">Encaminhamento:</label>
                          <select id="inputEncaminhamentoColegiado" class="form-control" name="encaminhamentocolegiado">

                          <option selected>Selecione...</option>

                             <?php 
                                             
                                $servername = "127.0.0.1";
                                $database = "protocolos";
                                $username = "root";
                                $password = "";
                                                         
                                      $conn = mysqli_connect($servername, $username, $password, $database);
                                                //Carrega os dados
                                      $sql = "SELECT * FROM encaminhamento";
                                      $consulta = mysqli_query($conn, $sql);

                                        while( $dados = mysqli_fetch_assoc($consulta)){                                    
                                               
                                            echo "<option>".utf8_encode($dados['encaminhamento'])."</option>";                              
                                        }     
                                     ?>         
                                     
                              </select>

                            </div>

      </div>
             <div class="form-row ml-5">
                        
                <div class="form-group col-sm-12 ">

                  <label for="inputObservacaocolegiado">Observação:</label>
                  <textarea class="form-control" id="inputObservacaocolegiado" name="observacaocolegiado"></textarea>

                </div>

            </div>

                  <div class="form-row ml-5">
                          
                        <div class="col-sm-12">
                            
                          <button type="submit" class="btn btn-primary">Cadastrar</button>
                          
                      </div>
                    </div>

                    <?php 
             if (isset($_GET['o'])) {
               ?>

                 <p class="ml-3"><?php echo  $_GET['o']; ?></p>
          
              <?php 

                }
              ?>

                 </form>   
                 
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