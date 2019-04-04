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
                    dataType: 'json',
                    url: 'funções/adicionarentregaproto.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        if (response == '1') {

                            $('#myodal').modal('show');


                        } else {
                            $('#myodal2').modal('show');
                        }
                    }
                });

                return false;
            });
        });
    </script>
</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <i class="fas fa-university text-light mr-1"></i>
        <a class="navbar-brand mr-1" href="menu.php">Uemg</a>

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
        <?php include_once 'side_bar.php'; ?>
        <div id="content-wrapper">

            <?php 

            $login = $_SESSION['login'];
            ?>


            <div class="container-fluid">

                <div class="row">

                    <div class="col-12 text-center my-5">
                        <h1 style="font-weight: 330;"><i class="fa fa-paper-plane text-primary mr-3" aria-hidden="true"></i>Cadastro de Entrega de Documentos</h3>
                    </div>
                </div>
                <div class="row mb-5 justifiy-content-center">

                    <div class="col-sm-12 col-md-10 col-lg-8">

                        <form method="post" id = "cadDocumento" action="">

                            <div class="form-row ml-5">

                                <div class="form-group col-sm-6 ">
                                    <?php 

                                    $sql = "SELECT Id FROM addentregaprotocolos ORDER BY Id DESC LIMIT 1";
                                    $execute = mysqli_query($conn, $sql);
                                    $dados = mysqli_fetch_assoc($execute);
                                    $dadosId =  $dados['Id'] + 1;

                                    ?>

                                    <label for="inputNumProto">Número Protocolo:</label>
                                    <input type="text" class="form-control" id="inputNumProto" name="numproto" placeholder="Digite número do protocolo" value="<?php echo date('Ym') . str_pad($dadosId, 4, "0", STR_PAD_LEFT); ?>" readonly="true">

                                </div>

                                <div class="form-group col-sm-6">

                                    <label for="inputNomeAtendente">Atendente:</label>
                                    <input type="text" class="form-control" id="inputNomeAtendetne" name="nomeatendente" value="<?php echo $login; ?>" required="">

                                </div>

                            </div>

                            <div class="form-row ml-5">

                                <div class="form-group col-sm-6 ">

                                    <label for="inputNomeAten">Requerente:</label>
                                    <input type="text" class="form-control" id="inputNomeAten" name="nomeatendido" placeholder="Digite o nome do Requerente" required="">

                                </div>

                                <div class="form-group col-sm-6">

                                    <label for="inputEncaminhamento">Destinação:</label>
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

                                        while ($dados = mysqli_fetch_assoc($consulta)) {

                                          echo "<option>" . $dados['encaminhamento'] . "</option>";
                                        }
                                        ?>

                                    </select>

                                </div>

                            </div>

                            <div class="form-row ml-5">

                                <div class="form-group col-sm-6">

                                    <label for="inputData">Data:</label>
                                    <input type="date" class="form-control" id="inputData" name="data" required="">

                                </div>
                                <script type="text/javascript">
                                    document.getElementById('inputData').valueAsDate = new Date();
                                </script>


                                <div class="form-group col-sm-6">

                                    <label for="inputDataRetirada">Data de Retirada:</label>
                                    <input type="date" class="form-control" id="inputDataRetirada" name="dataretirada" required="">

                                </div>
                            </div>


                            <div class="form-row ml-5">

                                <div class="form-group col-sm-4">

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

                                        while ($dados = mysqli_fetch_assoc($consulta)) {

                                          echo "<option>" . $dados['curso'] . "</option>";
                                        }
                                        ?>

                                    </select>

                                </div>
                                <div class="form-group col-sm-4">

                                    <label for="inputCurso">Vencimento:</label>
                                    <select id="inputCurso" class="form-control" name="vencimento">

                                        <option selected>Selecione...</option>
                                        <option>3 Dias</option>
                                        <option> 5 Dias</option>

                                    </select>

                                </div>


                                <div class="form-group col-sm-4">

                                    <label for="inputDAE">DAE:</label>
                                    <input type="text" id="inputDAE" class="form-control" name="DAE" required="" placeholder="">

                                </div>

                            </div>

                            <div class="form-row ml-5">

                                <div class="form-group col-sm-3">

                                    <label for="inputPeriodo">Período:</label>
                                    <input type="text" class="form-control" id="inputPeriodo" name="periodo" required="">

                                </div>


                                <div class="form-group col-sm-9">

                                    <label for="inputEntregue">Entregue Por: </label>
                                    <input type="text" class="form-control" id="inputEntregue" name="entregue" required="">

                                </div>
                            </div>

                            <div class="form-row ml-5">

                                <div class="form-group col-sm-6 ">

                                    <label for="inputDescricao">Descrição:</label>
                                    <textarea class="form-control" id="inputDescricao" name="descricao"></textarea>

                                </div>

                                <div class="form-group col-sm-6 ">

                                    <label for="inputObservacao">Observação:</label>
                                    <textarea class="form-control" id="inputObservacao" name="observacao"></textarea>

                                </div>

                            </div>


                            <div class="form-row ml-5">

                                <div class="col-sm-12">

                                <input  class = "btn btn-primary"type="button" value="Cadastrar" id="salvar" />


                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>


 <!-- Cadastro Modal -->
 <div class="modal fade" id="myodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Documento cadastrado com Sucesso!</h4>
                    </div>
                    <div class="modal-footer">
<<<<<<< HEAD
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>
                        <a  class="text-white"href="verficaentregaproto.php"><button type="button" class="btn btn-info">Listar Documentos</a>
=======
                        <a href="addentregaproto.php"><button type="button" class="btn btn-danger">Voltar</button></a>
                        <a  class="text-white"href="verficaentregaproto.php"><button type="button" class="btn btn-info">Documentos</a>
>>>>>>> 1d53764072c972e75bd4f41034f84fc05c3fff9f
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal já Cadastrado -->
        <div class="modal fade" id="myodal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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