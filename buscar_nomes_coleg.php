<?php include_once "conexao.php"; ?>
<?php


// Recebe o valor enviado
$valor = $_GET['valor'];


// Procura titulos no banco relacionados ao valor
$sql ="SELECT * FROM addprotocolos WHERE ra LIKE '%".$valor."%'";
$consulta = mysqli_query($conn,$sql); 
// Exibe todos os valores encontrados
echo "";
while ($noticias = mysqli_fetch_assoc($consulta)) {
	
	$id = $noticias['Id'];
	$nome = $noticias['ra'];

	echo  "       
	        <form method='get' action='vercolegiado.php' class='col-5'>  
            	<input type='hidden' name='id' value='$id' />                      
                <button type='submit' class='btn btn-primary ml-5 mb-3' formaction='vercolegiado.php' style='width: 100%;'>$nome</button>    
            </form>
           
	        ";
}
 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);

?>