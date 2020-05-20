<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ALL RF</title>
</head>
<body>
	<br>
	<br>
	<table border="2" align="center" style="width:100%">
		<TR>
			<TD style="text-align: center;"><b>Folio</b></TD>
			<TD style="text-align: center;"><b>Num. Control</b></TD>
			<TD style="text-align: center;"><b>Documento Solicitado</b></TD>
			<TD style="text-align: center;"><b>Status</b></TD>
			<TD style="text-align: center;"><b>Fecha de solicitud</b></TD>

		</TR>
		<?php
			$sql="SELECT * FROM documentos";
			$result=mysqli_query($conexion,$sql);		

			while($mostrar=mysqli_fetch_array($result)){
		?>
		<tr>
			<td style="text-align: center;"><b><?php echo $mostrar['folio_doc']; ?></b></td>
			<td style="text-align: center;"><b><?php echo $mostrar['num_control'] ?></b></td>
			<td style="text-align: center;"><b><?php echo $mostrar['doc_sol'] ?></b></td>
			<td style="text-align: center;"><b><?php echo $mostrar['status'] ?></b></td>
			<TD style="text-align: center;"><b><?php echo $mostrar['fecha'] ?></b></TD>
			
		</tr>
		<?php
		}
		?>
	</table>

</body>
</html>