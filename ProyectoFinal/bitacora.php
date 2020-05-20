<?php
include ('conexion.php');


session_start();
$num_control=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>SOLICITUD</title>
<link rel="stylesheet" href="diseno/css/estilos.css">
<style>
body {
	background-image: url("FondoTec.png");
} 
</style>
</head>
<body>
	<br>
	<br>
	<table border="2" align="center" style="width:99%">
		<TR>
			<TD style="text-align: center;"><b>Folio</b></TD>
			<TD style="text-align: center;"><b>Num_Control</b></TD>
			<td style="text-align: center;"><b>Documento Solicitado</b></td>
			<TD style="text-align: center;"><b>Tipo_pago</b></TD>
			<TD style="text-align: center;"><b>Monto</b></TD>
			<TD style="text-align: center;"><b>Status</b></TD>
			<td style="text-align: center;"><b>Fecha de Creacion</b></td>
			<td style="text-align: center;"><b>Ejecutor</b></td>



		</TR>
		<?php
			$sql2="SELECT * FROM bitacora_documentos ";
			$result2=mysqli_query($conexion,$sql2);		

			while($mostrar2=mysqli_fetch_array($result2)){
		?>
		<tr>
			<td style="text-align: center;"><b><?php echo $mostrar2['folio']?></b></td>
			<td style="text-align: center;"><b><?php echo $mostrar2['num_cop']?></b></td>
			<td style="text-align: center;"><b><?php echo $mostrar2['doc_solcop']?></b></td>
			<td style="text-align: center;"><b><?php echo $mostrar2['tipo_pagocop']?></b></td>
			<td style="text-align: center;"><b>$<?php echo $mostrar2['montocop']?>.00(MXN)</b></td>
			<td style="text-align: center;"><b><?php echo $mostrar2['statuscop']?></b></td>
			<td style="text-align: center;"><b><?php echo $mostrar2['modificadacop']?></b></td>
			<td style="text-align: center;"><b> <?php echo $mostrar2['ejecutor']; ?></b> </td>

				
		</tr>
		<?php
		}
		?>
	</table>

</body>
</html>