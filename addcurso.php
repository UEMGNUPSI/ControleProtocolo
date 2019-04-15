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
                
                var dados = $('#cadCurso').serialize();

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'funções/adicionarcurso.php',
                    async: true,
                    data: dados,
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

<body id="page-top">


        <!-- Navbar Search -->
        <?php include_once "funções/navbar.php"; ?>

        <!-- Navbar -->



    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'side_bar.php'; ?>

        <div id="content-wrapper">

            <div class="container-fluid">


                <form method="post" id="cadCurso">

                    <div class="form-row ml-5">

                        <div class="form-group col-sm-6 ">
                            <label for="curso">Curso:</label>
                            <input type="text" class="form-control" maxlength="15" minlength="5" name="curso" id="curso" placeholder="Digite nome do curso" required="">
                        </div>

                    </div>



                    <div class="form-row ml-5 mb-3">
                        <div class="col-sm-6">
                            <input  class = "btn btn-primary"type="button" value="Cadastrar" id="salvar" style="float: right;" />
                            <a class="btn btn-danger text-white" id="voltar" data-toggle="modal" data-target="#Cancelar">Cancelar</a> 
                        </div>

                    </div>
                </form>

                <?php 
                if (isset($_GET['o'])) {
                    ?>

                <p class="ml-5"><?php echo  $_GET['o']; ?></p>

                <?php 
            }
            ?>


            </div>

        </div>

        <!-- Cadastro Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Curso cadastrado com Sucesso!</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Voltar</button>
                        <a  class="text-white"href="listacursos.php"><button type="button" class="btn btn-info">Listar Cursos</a>
                    </div>
   x             </div>
            </div>
        </div>
        <!-- Modal já Cadastrado -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Curso já cadastrado!</h4>
						</div>
						<div class="modal-footer">
							<a href="addcurso.php"><button type="button" class="btn btn-danger">Voltar</button></a>
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
                        <input type='button' class="btn btn-primary" value='Cancelar' onclick='history.go(-1)' />
                    </div>
                </div>
            </div>
        </div>

        <!-- Logout Modal-->
        <?php include_once "funções/logout.php" ;?>

</body>

</html> 