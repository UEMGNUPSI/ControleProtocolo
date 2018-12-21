<?php 

$servername = "localhost";
$database = "protocolos";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$id = $_GET['id'];

$sql = "DELETE FROM solicitacaodiplomas WHERE id = $id ";
$update = mysqli_query($conn, $sql);

if ($update) {
    header("Location: /protocolos/verificadiploma.php");
} else {
    header("Location: /protocolos/menu.php");
}
?>