<?php 
  session_start();      

 $servername = "10.93.10.10";
        $database = "protocolos";
        $username = "protocolos";
        $password = "protocolos*01";
      
  $conn = mysqli_connect($servername, $username, $password, $database);

  $curso = $_POST['curso'];
  $datainicial = $_POST['inicial'];
  $datafinal = $_POST['final'];
  
  $sql = "SELECT Id FROM `addprotocolos` WHERE cursocolegiado='$curso' AND ( `data` >= '$datainicial' AND `data` <='$datafinal' )";
  $consulta = mysqli_query($conn, $sql);
  $num_rows = mysqli_num_rows($consulta);

  $array = [];
   
   while( $dados = mysqli_fetch_assoc($consulta)){        

      array_push($array,(int)$dados['Id']);
   }
   

   if ($num_rows > 0) {
    $_SESSION['id'] = $array;
    echo"<script language='javascript' type='text/javascript'>window.location.href='menu.php?modal=$num_rows&curso=$curso';</script>";
   }else{
    echo"<script language='javascript' type='text/javascript'>window.location.href='menu.php?modal=$num_rows&curso=$curso';</script>";
   } 
?>

 