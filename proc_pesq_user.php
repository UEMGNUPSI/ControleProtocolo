<?php 
	$servidor="127.0.0.1";
    $usuario="root";
    $senha="";
    $bancodedados="protocolos";

    $mysqli=new mysqli($servidor,$usuario,$senha,$bancodedados);                  

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