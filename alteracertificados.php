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

  

      <!-- Navbar Search -->
      <?php include_once "funções/navbar.php"; ?>

      <!-- Navbar -->
  
    <div id="wrapper">

      <!-- Sidebar -->
      <?php include_once 'side_bar.php';?>
  <div id="content-wrapper">

        <div class="container-fluid">

           <?php 
              $servername = "127.0.0.1";
              $database = "protocolos";
              $username = "root";
              $password = "";

              $id=$_GET['id'];
                                        
              $conn = mysqli_connect($servername, $username, $password, $database);
                  //Carrega os dados
              $sql = "SELECT * FROM addentregapos WHERE id='$id'";
                  $consulta = mysqli_query($conn, $sql);
                            
              while( $dados = mysqli_fetch_assoc($consulta)){                                    
              ?>            

           <div class="row">

            <div class="col-12 text-center my-5">
              <h1 class="display-4"><i class="fa fa-paper-plane text-primary mr-3" aria-hidden="true"></i>Entrega de Certificados</h1>
            </div>
          </div>
              <div class="row mb-5 justifiy-content-center">
                
                <div class="col-sm-12 col-md-10 col-lg-8">
                  
                  <form method="post" action="funções/mudapos.php?id=<?php echo $dados['id'];?>">

                      <div class="form-row ml-5">

                            <div class="form-group col-sm-6 ">
                            
                              <label for="inputNumProto">Número Protocolo:</label>
                              <input type="text" class="form-control" id="inputNumProto" name="numproto" placeholder="<?php echo $dados['numproto'] ?>" required="">
                            
                            </div>

                            <div class="form-group col-sm-6">
                            
                              <label for="inputNomeAtendente">Aluno:</label>
                              <input type="text" class="form-control" id="inputAluno" name="nomealuno" placeholder="<?php echo $dados['nome'] ?>" required="">
                            
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
                                                
                                                echo "<option>".utf8_encode($dados['curso'])."</option>";                              
                                           }     
                                     ?>         
                                     
                              </select>

                      </div>
            

                      <div class="form-group col-sm-6">
                        
                        <label for="inputHistorico">Data da Solicitação:</label>
                        <input type="date" id="inputData" class="form-control" name="datasolicitada" required="" >

                      </div>  

                    </div> 

                    <div class="form-row ml-5">
              
                        <div class="col-sm-12">                          

                          
                          <button type="submit" class="btn btn-primary">Alterar</button>   
                          <input type='button' class="btn btn-danger" value='Cancelar' onclick='history.go(-1)' />                      

                        </div>  

                       

                    </div>

                   </form>

               </div>

             </div>
 <?php } ?>
        </div>
  </div>       
      

    <!-- Logout Modal-->
    <?php include_once "funções/logout.php" ;?>
    

  </body>

</html>
