<?php 
$servername = "10.93.10.10";
        $database = "protocolos";
        $username = "protocolos";
        $password = "protocolos*01";

                $mysqli = new mysqli($servername, $username, $password, $database);                 

	if (isset($_POST['campo']))
		$campo= "%".trim($_POST['campo'])."%";

	$sql = "select encaminhamento,nome,datavencimento from addprotocolos where encaminhamento";

	if (isset($_POST['campo']))
		$sql = $sql . ' like ? ';

	$sql=$mysqli->prepare($sql);

	if (isset($_POST['campo']))
		$sql->bind_param("s",$campo);
	
	$sql->execute();
	$sql->bind_result($encaminhamento,$nome,$datavencimento);

	echo "
	    <table>
	        <thead>
	        <tr>
	            <td>Encaminhamento</td>
	            <td>Requerente</td>
	            <td>Data de Vencimento</td>
	        </tr>
	        </thead>

	        <tbody>
	        ";

	        while($sql->fetch()){

	        echo "
	        <tr>
	            <td>$encaminhamento</td>
	            <td>$nome</td>
	            <td>$datavencimento</td>
	        </tr>
	        ";
	        }

	        echo "
	        </tbody>
	    </table>
	";
 

 ?>  