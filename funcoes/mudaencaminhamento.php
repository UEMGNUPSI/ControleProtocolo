<?php include_once "../conexao.php"; ?>
<?php 

    $id =  $_POST['id'];  
    $encaminhamento = $_POST['encaminhamento'];


  
    $sql = "UPDATE encaminhamento SET encaminhamento='$encaminhamento' WHERE id='$id'";
    $update = mysqli_query($conn, $sql);
    
    if ($update) {
            header('Location: /protocolos/listaencaminahmento.php');
    }else{
            header('Location? /protocolos/menu.php');
    }
     
   
     
?>