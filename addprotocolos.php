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

    <script type="text/javascript">
        function time() {
            today = new Date();
            h = today.getHours();
            m = today.getMinutes();
            s = today.getSeconds();
            document.getElementById('hora').value = h + ":" + m;
            setTimeout('time()', 9000);
        }
    </script>
    <script type="text/javascript" language="javascript">
        $(document).ready(function() {

            /// Quando usuário clicar em salvar será feito todos os passo abaixo
            $('#salvar').click(function() {

                var formi= $('#cadProtocolo').serialize();

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'funções/adicionarproto.php',
                    async: true,
                    data: formi,
                    success: function(response) {
                        if (response == '1') {

                            $('#myModal').modal('show');


                        } else {
                            $('#myModal2').modal('show');
                        }
                    }
                });

                return false;
            });
        });
    </script>


</head>

<body id="page-top" onload="time()">


    

        <!-- Navbar Search -->
        <?php include_once "funções/navbar.php"; ?>

        <!-- Navbar -->


    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'side_bar.php'; ?>

        <div id="content-wrapper">
            <?php 

            $login = $_SESSION['login'];
            ?>

            <div class="container-fluid">

                <div class="row mb-5 justifiy-content-center">

                    <div class="col-sm-12 col-md-10 col-lg-8">

                        <div class="row">

                            <div class="col-12 text-center my-4">
                                <h1 style="font-weight: 330;"><i class="fa fa-paper-plane text-primary mr-3" aria-hidden="true"></i>Cadastro de Protocolos</h1>
                            </div>
                        </div>



                        <form method="post" id="cadProtocolo">

                            <div class="form-row ml-5">

                                <div class="form-group col-sm-6 ">
                                    <?php 

                                    $sql = "SELECT Id FROM addprotocolos ORDER BY Id DESC LIMIT 1";
                                    $execute = mysqli_query($conn, $sql);
                                    $dados = mysqli_fetch_assoc($execute);
                                    $dadosId =  $dados['Id'] + 1;

                                    ?>

                                    <label for="numproto">Número Protocolo:</label>
                                    <input type="text" class="form-control" id="numproto" name="numproto" value="<?php echo date('Ym') . str_pad($dadosId, 4, "0", STR_PAD_LEFT); ?>" readonly="true">

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

                                    <label for="data">Data</label>
                                    <input type="date" class="form-control" id="data" name="data" required="" value="">

                                </div>
                                <script type="text/javascript">
                                    document.getElementById('data').valueAsDate = new Date();
                                </script>


                                <div class="form-group col-sm-6">

                                    <label for="hora">Hora:</label>
                                    <input type="text" class="form-control" id="hora" name="hora" required="">

                                </div>
                            </div>

                            <div class="form-row ml-5">

                                <div class="form-group col-sm-6">

                                    <label for="vencimento">Vencimento em:</label>
                                    <select id="vencimento" class="form-control" name="vencimento">

                                        <option selected>Selecione...</option>
                                        <option>3 dias</option>
                                        <option>5 dias</option>


                                    </select>

                                </div>


                                <div class="form-group col-sm-6">

                                    <label for="retirada">Data de Retirada:</label>
                                    <input type="date" id="retirada" class="form-control" name="retirada" required="" placeholder="">

                                </div>

                            </div>

                            <div class="form-row ml-5">

                                <div class="form-group col-sm-6">

                                    <label for="curso">Curso:</label>
                                    <select id="curso" class="form-control" name="curso">

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


                                <div class="form-group col-sm-6">

                                    <label for="historico">Histórico:</label>
                                    <input type="text" id="historico" class="form-control" name="historico" placeholder="">

                                </div>

                            </div>

                            <div class="form-row ml-5">

                                <div class="form-group col-sm-12 ">

                                    <label for="observacao">Observação:</label>
                                    <textarea class="form-control" id="observacao" name="observacao"></textarea>

                                </div>



                            </div>




                            <div class="row">

                                <div class="col-12 text-center my-5">
                                    <h1 style="font-weight: 330;"><i class="fa fa-paper-plane text-primary mr-3" aria-hidden="true"></i>Cadastro de Colegiado</h1>
                                </div>
                            </div>
                            <div class="form-row ml-5">

                                <div class="form-group col-sm-4 ">

                                    <label for="numra">Número RA:</label>
                                    <input type="text" class="form-control" id="numra" name="numra" placeholder="Digite número do RA" required="" minlength="1" maxlength="10">

                                </div>



                                <div class="form-group col-sm-4">

                                    <label for="cursocolegiado">Curso:</label>
                                    <select id="cursocolegiado" class="form-control" name="cursocolegiado">

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

                                    <label for="encaminhamentocolegiado">Destinação:</label>
                                    <select id="encaminhamentocolegiado" class="form-control" name="encaminhamentocolegiado">

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

                                            echo "<option>" .($dados['encaminhamento']) . "</option>";
                                        }
                                        ?>

                                    </select>

                                </div>

                            </div>
                            <div class="form-row ml-5">

                                <div class="form-group col-sm-12 ">

                                    <label for="observacaocolegiado">Observação:</label>
                                    <textarea class="form-control" id="observacaocolegiado" name="observacaocolegiado"></textarea>

                                </div>

                            </div>

                            <div class="form-row ml-5">

                                <div class="col-sm-12">
                                    
                                    <input class="btn btn-primary" type="button" value="Cadastrar" id="salvar" />
                                    <a class="btn btn-danger" id="voltar" href="menu.php">Cancelar</a>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>

        
        <!-- Cadastro Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Protocolo cadastrado com Sucesso!</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>
                        <a class="text-white" href="verificaprotocolos.php"><button type="button" class="btn btn-info">Listar Protocolos</a>
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
                        <a href="addprotocolos.php"><button type="button" class="btn btn-danger">Voltar</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logout Modal-->
        <?php include_once "funções/logout.php" ;?>


</body>

</html> 