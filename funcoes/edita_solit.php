<?php include_once "/protocolos/conexao.php"; ?>
<?php 
 
$id = $_POST['id'];
$numproto = $_POST['numproto'];
$data = $_POST['data'];
$requerente = $_POST['nomealuno'];
$atendente = $_POST['nomeatendente'];


$sql = "UPDATE solicitacaodiplomas SET numproto = '$numproto', datasolicitada ='$data',requerente = '$requerente', atendente = '$atendente' WHERE id='$id'";

$update = mysqli_query($conn, $sql);

if ($update) {
    header('location:/protocolos/verificadiploma.php');
} else {
    header('location:/protocolos/menu.php');
}


?>