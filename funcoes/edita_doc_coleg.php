<?php include_once "/protocolos/conexao.php"; ?>
<?php 

$id = $_GET['id'];
$numproto = $_POST['numproto'];
$requerente = $_POST['requerente'];
$data = $_POST['data'];
$ra = $_POST['ra'];
$curso = $_POST['curso'];
$observacao = $_POST['observacao'];


$sql = "UPDATE addprotocolos SET ra = '$ra', curso ='$curso',obsevacaocolegiado = '$observacao',numproto = '$numproto',nome = '$requerente',data = '$data' WHERE Id='$id'";

$update = mysqli_query($conn, $sql);

if ($update) {
	header('location:/protocolos/doccolegiado.php');
} else {
	header('location:/protocolos/menu.php');
}


?>