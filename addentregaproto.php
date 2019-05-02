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
             $('#salvar').click(function() {

                 var dados = $('#cadDocumento').serialize();

                 $.ajax({
                    type: 'POST',
                    dataType: 'html',
                    url: 'funcoes/adicionarentregaproto.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        if (response == '1'){ 
                            //document.write("ASHAHJBDSJKVKJHKJHVKJS");
                           $('#myModal').modal('show');
                        } else {
                           // document.write("teste");
                           $('#myModal2').modal('show');   
                        }
                     }
                 });

                 return false;
             });
         });


    </script>
</head>

<body id="page-top">
    <?php include_once "conexao.php"; ?>
    <!-- Navbar Search -->
    <?php include_once "funcoes/navbar.php"; ?>

    <!-- Navbar -->




    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'side_bar.php'; ?>
        <div id="content-wrapper">

            <?php 

            $login = $_SESSION['login'];
            ?>


            <div class="container-fluid">

                <div class="row">

                    <div class="col-12 text-center my-5">
                        <h1 style="font-weight: 330;"><i class="fa fa-paper-plane text-primary mr-3" aria-hidden="true"></i>Entrega de Documentos</h1>
                    </div>
                </div>
                    
                    <div class="row mb-5 justifiy-content-center">

                        <div class="col-sm-12 col-md-10 col-lg-8">

                            <form id="cadDocumento" method="post" >

                                    <div class="form-row ml-5">

                                    <div class="form-group col-sm-6 ">
                                        <?php 

                                        $sql = "SELECT Id FROM addentregaprotocolos ORDER BY Id DESC ";
                                        $execute = mysqli_query($conn, $sql);
                                        $dados = mysqli_fetch_assoc($execute);
                                        $dadosId =  $dados['Id'] + 1;

                                        ?>

                                        <label for="numproto">Número Protocolo:</label>
                                        <input type="text" class="form-control" id="numproto" name="numproto" placeholder="Digite número do protocolo" value="<?php echo date('Ym') . str_pad($dadosId, 4, "0", STR_PAD_LEFT); ?>" readonly="true">

                                    </div>

                                    <div class="form-group col-sm-6">

                                        <label for="nomeatendente">Atendente:</label>
                                        <input type="text" class="form-control" id="nomeatendente" name="nomeatendente" value="<?php echo $login; ?>" required="">

                                    </div>

                                </div>

                                <div class="form-row ml-5">

                                    <div class="form-group col-sm-6 ">

                                        <label for="nomeatendido">Requerente:</label>
                                        <input type="text" class="form-control" id="nomeatendido" name="nomeatendido" placeholder="Digite o nome do Requerente" required="">

                                    </div>

                                    <div class="form-group col-sm-6">

                                        <label for="encaminhamento">Destinação:</label>
                                        <select id="encaminhamento" class="form-control" name="encaminhamento">

                                            <option selected>Selecione...</option>

                                            <?php 



                                                                                 //Carrega os dados
                                            $sql = "SELECT * FROM encaminhamento";
                                            $consulta = mysqli_query($conn, $sql);

                                            while ($dados = mysqli_fetch_assoc($consulta)) {

                                              echo "<option>" . $dados['encaminhamento'] . "</option>";
                                          }
                                          ?>

                                      </select>

                                  </div>

                              </div>

                              <div class="form-row ml-5">

                                <div class="form-group col-sm-6">

                                    <label for="data">Data:</label>
                                    <input type="date" class="form-control" id="data" name="data" required="">

                                </div>
                                <script type="text/javascript">
                                    document.getElementById('data').valueAsDate = new Date();
                                </script>


                                <div class="form-group col-sm-6">

                                    <label for="dataretirada">Data de Retirada:</label>
                                    <input type="date" class="form-control" id="dataretirada" name="dataretirada" required="">

                                </div>
                            </div>


                            <div class="form-row ml-5">

                                <div class="form-group col-sm-4">

                                    <label for="curso">Curso:</label>
                                    <select id="curso" class="form-control" name="curso">

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
                              <div class="form-group col-sm-4">

                                <label for="vencimento">Vencimento:</label>
                                <select id="vencimento" class="form-control" name="vencimento">

                                    <option selected>Selecione...</option>
                                    <option>3 Dias</option>
                                    <option> 5 Dias</option>

                                </select>

                            </div>


                            <div class="form-group col-sm-4">

                                <label for="DAE">DAE:</label>
                                <input type="text" id="inputDAE" class="form-control" name="DAE" required="" placeholder="">

                            </div>

                        </div>

                        <div class="form-row ml-5">

                            <div class="form-group col-sm-3">

                                <label for="periodo">Período:</label>
                                <input type="text" class="form-control" id="periodo" name="periodo" required="">

                            </div>


                            <div class="form-group col-sm-9">

                                <label for="entregue">Entregue Por: </label>
                                <input type="text" class="form-control" id="entregue" name="entregue" required="">

                            </div>
                        </div>

                        <div class="form-row ml-5">

                            <div class="form-group col-sm-6 ">

                                <label for="descricao">Descrição:</label>
                                <textarea class="form-control" id="descricao" name="descricao"></textarea>

                            </div>

                            <div class="form-group col-sm-6 ">

                                <label for="observacao">Observação:</label>
                                <textarea class="form-control" id="observacao" name="observacao"></textarea>

                            </div>

                        </div>


                        <div class="form-row ml-5">

                            <div class="col-sm-12">

                                <input  class = "btn btn-primary"type="button" value="Cadastrar" id="salvar" style="float: right;" />
                                <a class="btn btn-danger text-white" id="voltar" data-toggle="modal" data-target="#Cancelar">Cancelar</a>

                            </div>
                        </div>

                            </form>
                    
                        </div>
                   
                     </div>

            </div>

        </div>

    </div>


    <!-- Cadastro Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Documento cadastrado com Sucesso!</h4>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>
                    <a  class="text-white"href="verficaentregaproto.php"><button type="button" class="btn btn-info">Listar Documentos</button></a>



                    </div>
                </div>
            </div>
        </div>
        <!-- Modal já Cadastrado -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
             <div class="modal-content">
              <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">Protocolo já cadastrado!</h4>
           </div>
           <div class="modal-footer">
               <a href="addentregaproto.php"><button type="button" class="btn btn-danger">Voltar</button></a>
           </div>
       </div>
   </div>
</div>

<div class="modal fade" id="Cancelar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Deseja mesmo cancelar este cadastro?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>
                <a class="text-white" href="menu.php"><button type="button" class="btn btn-info">Cancelar</button></a>
                </div>
            </div>
        </div>
    </div>



    <!-- Logout Modal-->
    <?php include_once "funcoes/logout.php" ;?>

</body>

</html> 