<?php include_once "../conexao.php"; ?>
<?php 
 
    $id=$_GET['id'];   

    $numproto = $_POST['numproto'];   	
    $data = $_POST['datasolicitada'];   
    $curso = $_POST['curso'];   
    $nome = $_POST['nomealuno'];
    

    $sql = "UPDATE addentregapos SET numproto='$numproto',nome='$nome', curso='$curso',datasolicitada='$data' WHERE id='$id'";
    $update = mysqli_query($conn, $sql);

    if ($update) {
             header('Location: /protocolos/verificacertificados.php');
    }else{
            header('Location: /protocolos/menu.php');
    }
		
 ?>



