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
    <script>
         function excluirModal() {
           $('#excluirModal').modal('show');
           event.preventDefault();
         }       
    </script>
  <style type="text/css">   
  button{
     background-color: white;
     
     border-color: white;
  }
</style>
</head>
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

      <?php include_once 'side_bar.php'; ?>
      
      <div id="content-wrapper">

        <div class="container-fluid">

        	 <div class="card mb-3">
            <div class="card-header">
               <a href="verificadiploma.php" style="color: black;font-size: 17px;">
              <i class="fas fa-arrow-left" title="Voltar" style=""></i>&emsp;
             Solicitação de Diplomas
            </a>  
            </div>
            <div class="card-body">
              <div class="table-responsive">             
              

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nº Protocolo</th>
                      <th>Requerente</th>                     
                      <th>Atendente</th>                      
                      <th>Data Solicitação</th>                      
                    </tr>
                  </thead>

                  
                   <?php 
                              
                        $servername = "127.0.0.1";
                        $database = "protocolos";
                        $username = "root";
                        $password = "";

                        $id=$_GET['id'];
                                        
                          $conn = mysqli_connect($servername, $username, $password, $database);
                                //Carrega os dados
                          $sql = "SELECT * FROM solicitacaodiplomas WHERE id='$id'";
                          $consulta = mysqli_query($conn, $sql);
                            
                          while( $dados = mysqli_fetch_assoc($consulta)){                                    
                                echo "<tbody>";
                                
                                echo "<tr>";                                
                                
                                echo "<td>" .$dados['numproto']."</td>";
                                echo "<td>" .$dados['requerente']."</td>";
                                echo "<td>" .$dados['atendente']."</td>";                                 
                                echo "<td>" .date("d/m/Y", strtotime ($dados['datasolicitada']))."</td>";                                                                         
                                
                                echo "</tr>";   
                                                      
                                echo "</tbody>";
                                
                              ?>                         
                              <form>    
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"> 
                                <button type="submit" class=" mr-3 mb-3" formaction="/protocolos/alterasolicitacao.php" ><i class="fas fa-pen-square" aria-hidden="true" style="cursor: pointer;"></i></button>  
                                <button type="submit" data-toggle="modal" data-target="#excluirModal<?php echo $dados['id']; ?>" onclick="excluirModal()"><i class="fa fa-trash " aria-hidden="true" style="cursor: pointer;"></i></button>
                                                               
                                </form>

                              <!-- EXCLUIR PROTOCOLO-->  

                                <div class="modal fade" id="excluirModal<?php echo $dados['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir este curso?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p>
                                          Número de Protocolo: <?php echo $dados['numproto']; ?>                                            
                                        </p>
                                      </div>
                                      <div class="modal-footer">        
                                        <form>                                               
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-primary" href="funções/exclui_solit.php?id=<?php echo $dados['id']; ?>">Excluir</a>            
                                        </form>
                                      </div>
                                   
                                   </div>
                                  
                                  </div>   
                              
                               </div> 

                    <?php } ?>                                          
                          
                      </table>              
                      

            </div>

          </div>
<!-- Inicio do upload -->
<form action="#" method="POST" enctype="multipart/form-data" class="ml-4 mb-3">
      
      <input type="file" name="fileUpload" id="fileUpload">
      <input type="submit" value="Enviar">
</form>
<?php  
  $ultimo_id = $_GET['id'];
  $_UP['pasta'] = 'documentos/diplomas/'.$ultimo_id.'/';

  if(isset($_FILES['fileUpload'])):
       // verifica a ação no botão
       $nome_imagem = $_FILES['fileUpload']['name'];  

    if(is_dir($_UP['pasta'])){
    //Se a Pasta Existe  
          if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$_UP['pasta'].$nome_imagem))
              echo "<h6 class='ml-4'>Arquivo salvo com sucesso!<br></h6>";
          else
              echo "<h6 class='ml-4'>Não foi possível salvar o arquivo!<br></h6>";      
    }else{
    //Se a pasta não existe
      //Criar a pasta de foto do produto
          mkdir($_UP['pasta'], 0777);        
      //Verificar se é possive mover o arquivo para a pasta escolhida
          if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$_UP['pasta'].$nome_imagem))
            echo "<h6 class='ml-4'>Arquivo salvo com sucesso!<br></h6>";
          else
            echo "<h6 class='ml-4'>Não foi possível salvar o arquivo!<br></h6>";
        }
 endif;
?> 

</div>

  <div class="card mb-3">
      <div class="card-header ">
        <i class="fas fa-table"></i>
          Lista de Arquivos Salvos</div>
        <div class="card-body ">

          <?php
            $ultimo_id = $_GET['id'];
            
            if(is_dir($_UP['pasta'])){
              $pasta = 'documentos/diplomas/'.$ultimo_id.'/';
              if ($handle = opendir($pasta)) {
                 while (false !== ($arquivo = readdir($handle))) {
                     if ($arquivo != "." && $arquivo != "..") {
                         echo "<a href='".$pasta.$arquivo."' target='_blanck'>".$arquivo."</a><br>";
                     } // fim do if de leitura de arquivo
                 } // fim do while de leitura das pasta
                 closedir($handle);
              }
            }else
                echo "Não foi salvo nenhum arquivo para este requerente!<br>";
          ?>       

        </div>
    </div>
     
</div>
</div>
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