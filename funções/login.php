


<?php

	session_start();
   $servername = "10.93.10.10";
  $database = "protocolos";
  $username = "protocolos";
  $password = "protocolos*01";
                   
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $_SESSION['login'] = $login;


 

    $result_usuario = "SELECT * FROM login WHERE login = '$login' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

   if(isset($resultado)){
   
    header('Location: /protocolos/menu.php?login='.$_SESSION['login'].'');
   }else {    
    echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/index.php?l=Usuário ou senha Inválido!';</script>"; 
   }

?>

 



