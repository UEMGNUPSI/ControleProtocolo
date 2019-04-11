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
  <script type="text/javascript" src="js/funcs_nomes.js"></script>

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


        <div class="col-12 text-center my-5">

          <h1 style="font-weight: 330;"><i class="fa fa-paper-plane text-primary mr-3" aria-hidden="true"></i>Lista de Protocolos</h1>
        </div>

        <div class="row">

          <div class="col-12">

            <form class="form-inline mb-3 ">
              <input class="form-control ml-5" type="search" placeholder="Buscar..." id="buscanome" onkeyup="buscaNomes(this.value)">
              <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <div class='row' id="resultado">

              <?php

              $servername = "127.0.0.1";
              $database = "protocolos";
              $username = "root";
              $password = "";

              $conn = mysqli_connect($servername, $username, $password, $database);
              //Carrega os dados
              $sql = "SELECT * FROM addprotocolos ORDER BY nome ASC";
              $consulta = mysqli_query($conn, $sql);

              while ($dados = mysqli_fetch_assoc($consulta)) {
                ?>
                <form method="get" action="verproto.php" class="col-5">
                  <input type="hidden" name="id" value="<?php echo $dados['Id']; ?>">
                                                      <button type="submit" class="btn btn-primary ml-5 mb-3" formaction="verproto.php" style="width: 100%;"><?php echo $dados['nome']; ?></button>
                                                                                                                        </form>
                                                                                                                                                                                                                                <?php
                                                                                                                      } ?>

            </div>

          </div>

        </div>

      </div>

    </div>



    <!-- Logout Modal-->
    <?php include_once "funções/logout.php" ;?>



</body>

</html>