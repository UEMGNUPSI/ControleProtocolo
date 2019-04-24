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
      <?php include_once "funcoes/navbar.php"; ?>

      <!-- Navbar -->
     

    <div id="wrapper">
<?php include_once "conexao.php"; ?>
      <!-- Sidebar -->
      <?php include_once 'side_bar.php';?>

     <div id="content-wrapper">

        <div class="container-fluid">     
         
         
        <form method="post">
          
          <div class="form-row ml-5">

             <?php 
                

                 $Id =  $_GET['id']; 
                 
                 
                    $sql = "SELECT * FROM curso WHERE id='$Id'";
                    $consulta = mysqli_query($conn, $sql);
                    $dados = mysqli_fetch_assoc($consulta);
                ?>
            <div class="form-group col-sm-6 ">            
              <label for="inputNome">Curso:</label>
              <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
              <input type="text" class="form-control" name="curso" id="inputNome" placeholder="<?php echo $dados['curso']; ?>">            
            </div>

          </div>

          

          <div class="form-row ml-5 mb-3">              
            <div class="col-sm-6">                    
              <button type="submit" class="btn btn-primary" formaction="funcoes/mudacurso.php" style="float: right;">Alterar</button>
              <a class="btn btn-danger text-white" id="voltar" data-toggle="modal" data-target="#Cancelar">Cancelar</a> 
          </div>          
         
        </form>     
           
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
    <?php include_once "funcoes/logout.php" ;?>

  </body>

</html>
