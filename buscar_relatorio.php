<?php 
  $servername = "127.0.0.1";
  $database = "protocolos";
  $username = "root";
  $password = "";
      
  $conn = mysqli_connect($servername, $username, $password, $database);


  $curso = $_POST['curso'];
  $datainicial = $_POST['dataInicial'];
  $datafinal = $_POST['dataFinal'];
  
  $sql = "SELECT nome FROM `addprotocolos` WHERE cursocolegiado='$curso' AND  `data` >= '$datainicial' AND `data` <='$datafinal'";
  $consulta = mysqli_query($conn, $sql);
  $num_rows = mysqli_num_rows($consulta);
   
  echo  $num_rows;
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);



 ?>
