<?php
 $servername = "10.93.10.10";
        $database = "protocolos";
        $username = "protocolos";
        $password = "protocolos*01";
    
$conn = mysqli_connect($servername, $username, $password, $database);


// Recebe o valor enviado
$valor = $_GET['valor'];


// Procura titulos no banco relacionados ao valor
$sql ="SELECT * FROM addentregaprotocolos WHERE nome LIKE '%".$valor."%'";
$consulta = mysqli_query($conn,$sql); 
// Exibe todos os valores encontrados
echo "";
while ($noticias = mysqli_fetch_assoc($consulta)) {
	
	$id = $noticias['id'];
	$nome = $noticias['nome'];

	echo  "       
	        <form method='get' action='verentregaproto.php' class='col-5'>  
            	<input type='hidden' name='id' value='$id' />                      
                <button type='submit' class='btn btn-primary ml-5 mb-3' formaction='verentregaproto.php' style='width: 100%;'>$nome</button>    
            </form>
           
	        ";
}
 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);

?>