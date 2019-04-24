<?php 
  $servername = "10.93.10.10";
  $database = "protocolos";
  $username = "protocolos";
  $password = "protocolos*01";
                   
    $conn = mysqli_connect($servername, $username, $password, $database);

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