<?php include_once "/protocolos/conexao.php"; ?>
<?php 

$id = $_GET['id'];

$sql = "DELETE FROM addprotocolos WHERE Id = $id ";
$update = mysqli_query ($conn, $sql);

if($update)
{
	header("Location: /protocolos/doccolegiado.php");
}
else
{
	header("Location: /protocolos/menu.php");
}
?>