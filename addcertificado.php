<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Protocolos</title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="menu.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script type="text/javascript" language="javascript">
        
        $(document).ready(function() {
            
            /// Quando usuário clicar em salvar será feito todos os passo abaixo
            $('#blablabla').click(function() {
                
                var certificado = $('#cadCertificado').serialize();

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'funções/adicionarcertificado.php',
                    async: true,
                    data: certificado,
                    success: function(response) {
                        if (response == '1') {
                            
                            $('#myModa').modal('show');
                            

                        } else {
                          
                          $('#myModa2').modal('show');

                        }
                    }
                });

                return false;
            });
        });
    </script>
</head>
<body id="page-top">

   
     

      <!-- Navbar Search -->
      <?php include_once "funções/navbar.php"; ?>


    <div id="wrapper">

      <!-- Sidebar -->
      <?php include_once 'side_bar.php';?>
  <div id="content-wrapper">

        <div class="container-fluid">

           <div class="row">

            <div class="col-12 text-center my-5">
              <h1 style="font-weight: 330;"><i class="fa fa-paper-plane text-primary mr-3" aria-hidden="true" ></i>Entrega de Certificados</h1>
            </div>
          </div>
              <div class="row mb-5 justifiy-content-center">
                
                <div class="col-sm-12 col-md-10 col-lg-8">
                  
                  <form method="post"  id ="cadCertificado">

                      <div class="form-row ml-5">

                            <div class="form-group col-sm-6 ">

                              <?php 

                              $sql = "SELECT Id FROM addentregapos ORDER BY Id DESC LIMIT 1";
                              $execute = mysqli_query($conn,$sql);
                              $dados = mysqli_fetch_assoc($execute);
                              $dadosId =  $dados['Id'] + 1;

                              ?>
                            
                              <label for="inputNumProto">Número Protocolo:</label>
                              <input type="text" class="form-control" id="inputNumProto" name="numproto" value="<?php echo date('Ym').str_pad($dadosId , 4, "0", STR_PAD_LEFT); ?>" readonly="true">
                            
                            </div>

                            <div class="form-group col-sm-6">
                            
                              <label for="inputNomeAtendente">Requerente:</label>
                              <input type="text" class="form-control" id="inputAluno" name="nomealuno" placeholder="Digite o Nome Atendente" required="">
                            
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
                        
                        <label for="inputHistorico">Data da Solicitação:</label>
                        <input type="date" id="inputData" class="form-control" name="datasolicitada" required="" placeholder="">

                      </div>  

                    </div> 

                    <div class="form-row ml-5">
              
                        <div class="col-sm-12">
                            
                        <input  class = "btn btn-primary"type="button" value="Cadastrar" id="blablabla" /> 
                        <a class="btn btn-danger" id="voltar" href="menu.php">Cancelar</a>   
                                             

                        </div>  

                    </div>

                   </form>

               </div>

             </div>

        </div>
  </div>       
      
 <!-- Cadastro Modal -->
 <div class="modal fade" id="myModa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Certificado cadastrado com Sucesso!</h4>
                    </div>
                    <div class="modal-footer">
<<<<<<< HEAD
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>
                        <a  class="text-white"href="verificacertificados.php"><button type="button" class="btn btn-info">Listar Certificados</a>
=======
                        <a href="addcertificado.php"><button type="button" class="btn btn-danger">Voltar</button></a>
                        <a  class="text-white"href="verificacertificados.php"><button type="button" class="btn btn-info">Certificados</a>
>>>>>>> 1d53764072c972e75bd4f41034f84fc05c3fff9f
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal já Cadastrado -->
        <div class="modal fade" id="myModa2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Certificado já cadastrado!</h4>
						</div>
						<div class="modal-footer">
							<a href="addcertificado.php"><button type="button" class="btn btn-danger">Voltar</button></a>
						</div>
					</div>
				</div>
			</div>			

   <?php include_once "funções/logout.php" ;?>
    

  </body>

</html>
