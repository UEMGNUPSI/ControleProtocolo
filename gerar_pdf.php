<?php include_once "conexao.php"; ?>
<?php
session_start();
$array = $_SESSION['id'];
	
$html='
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
hr {
border: 2px solid #000;
}
.textos {
font-family: Verdana, Geneva, sans-serif;
font-size: 13px;
line-height: 18px;
color: #333;
}
td {
font-family: Verdana, Geneva, sans-serif;
font-size: 13px;
line-height: 18px;

}
body {
font-family: Calibri;
}
#dados {
font-family: Calibri;
font-size: 16px;
}
h2 {
font-family: Calibri;
}

</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="25%" align="center"><h1>Relatório Colegiado </h1> 

</tr>
</table>
';

$sql = "SELECT * FROM `addprotocolos` WHERE ";

for ($i = 0; $i < count($array); $i++ ){
	$sql .= " id = " . $array[$i];

	if ($i !== count($array) - 1)
		$sql .= " OR";
}

//buscando protocolos

$consulta = mysqli_query($conn, $sql);

while( $dados = mysqli_fetch_assoc($consulta)){    		

	$html.='<hr />
	<h2>Ficha Requerente</h2>
	<div id="dados">
	<p>Número de Protocolo: ' . $dados['numproto'] . '</p>
	<p>Requerente: ' . $dados['nome'] . '</p>
	<p>Data: ' . date('d/m/Y',strtotime($dados['data'])) . '</p>
	<p>Ra: ' . $dados['ra'] . '</p>
	<p>Curso: ' . $dados['cursocolegiado'] . ' </p>
	</div>';

}

$html.='
<hr />
<p class="textos">UEMG - Universidade do Estado de Minas Gerais <br>
Unidade de Frutal
</p>
';

// Incluímos a biblioteca DOMPDF
require_once("dompdf/dompdf_config.inc.php");
 
// Instanciamos a classe
$dompdf = new DOMPDF();
 
// Passamos o conteúdo que será convertido para PDF
$dompdf->load_html($html);
 
// Definimos o tamanho do papel e
// sua orientação (retrato ou paisagem)
$dompdf->set_paper('A4','portrait');

/* Renderiza */
$dompdf->render();

/* Exibe */
$dompdf->stream(
    "colegiado.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);
?>