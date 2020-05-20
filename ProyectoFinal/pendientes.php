<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>

	<title>Pendientes RF</title>
	<link rel="stylesheet" href="diseno/css/estilos.css">
</head>
<body>
	<br>
	<br>
	<table border="2" align="center" style="width:60%">
		<TR>
			<TD style="text-align: center;"><b>Folio</b></TD>		
			<TD style="text-align: center;"><b>Num. Control</b></TD>
			<TD style="text-align: center;"><b>Documento Solicitado</b></TD>

		</TR>
		<?php
			$sql="SELECT num_control,doc_sol,folio_doc FROM documentos WHERE status='Espera'";
			$result=mysqli_query($conexion,$sql);		
			while($mostrar=mysqli_fetch_array($result)){
		?>
		<tr>
			<td style="text-align: center;"><b><?php echo $mostrar['folio_doc'] ?></b></td>
			<td style="text-align: center;"><b><?php echo $mostrar['num_control'] ?></b></td>	
			<td style="text-align: center;"><b><?php echo $mostrar['doc_sol'] ?></b></td>
		</tr>
	<?php
		}
		?>
	</table>
	<br>
	<form class="" action="modificarstatus.php" method="post" align="center" >
		<p>Para actualizar el status a aceptado ingrese el folio</p>
		<input type="text" name="num_control" placeholder="Folio ">
		<input type="submit" name="name" value="modificar" class="btn btn-1">
	</form>
</body>
</html>