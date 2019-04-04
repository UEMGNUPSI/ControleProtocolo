<!DOCTYPE html>
<html>

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
        button {
            background-color: white;
            border-style: solid;
            border-color: white;
        }
    </style>
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

            <div class="container-fluid" >



                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Lista de Cursos</div>
                    <div class="card-body">
                        <div class="table-responsive"  style="width: 90%; padding:1%; margin:auto">
                            <form action="addcurso.php">
                                <input type="submit" style="cursor: pointer;" class="mb-3 btn btn-primary" value="Cadastrar">
                                <form>

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <th class="text-center"> Cursos</th>
                                        <th class="text-center"> Ações</th>

                                        <?php 

                                        $servername = "127.0.0.1";
                                        $database = "protocolos";
                                        $username = "root";
                                        $password = "";

                                        $conn = mysqli_connect($servername, $username, $password, $database);
                                        //Carrega os dados
                                        $sql = "SELECT * FROM curso ORDER BY curso ASC";
                                        $consulta = mysqli_query($conn, $sql);

                                        while ($dados = mysqli_fetch_assoc($consulta)) {


                                          echo "<tbody>";
                                          echo "<tr>";
                                          echo "<td>" . $dados['curso'] . "</td>";

                                          echo "<td>";

                                          $id = $dados['id'];
                                          ?>

                                        <form>
                                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                            <button type="submit" style="cursor: pointer;" class=" mr-4" formaction="alteracurso.php"><i class="fas fa-pen-square text-primary" title="Editar" aria-hidden="true"></i></button>

                                            <button type="submit" style="cursor: pointer;" data-toggle="modal" data-target="#excluirModal<?php echo $dados['id']; ?>" onclick="excluirModal()"><i class="fa fa-trash text-primary" title="Excluir" aria-hidden="true"></i></button>
                                        </form>


                                        </td>

                                        </tr>
                                        </tbody>

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
                                                            Curso: <?php echo $dados['curso']; ?>
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                            <a class="btn btn-primary" href="funções/excluicurso.php?id=<?php echo $dados['id']; ?>">Excluir</a>
                                                        </form>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <?php 
                                      } ?>
                                        <!-- ExcluirModal -->




                                    </table>

                        </div>

                    </div>

                </div>

            </div>



            <!-- LogOut -->

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

        </div>

    </div>

</body>

</html> 