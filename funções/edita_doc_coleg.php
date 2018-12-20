<?php 

$servername = "localhost";
$database = "protocolos";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$id = $_GET['id'];
$ra = $_POST['ra'];
$curso = $_POST['curso'];
$observacao = $_POST['obsevacao'];


$sql = "UPDATE documentoscolegiado SET ra = '$ra', curso ='$curso',obsevacao = '$observacao' WHERE id='$id'";

$update = mysqli_query($conn, $sql);

if ($update) {
	header('location:/protocolos/doccolegiado.php');
} else {
	header('location:/protocolos/menu.php');
}


?>