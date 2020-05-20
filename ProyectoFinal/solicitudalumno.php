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
	<BUTTON class="btn btn-1" style=><a href="alum.php"> Regresar </a></BUTTON><br><br><br> 
	<table border="2" align="center" style="width:75%">
		<TR>
			<TD style="text-align: center;">Folio</TD>
			<td style="text-align: center;">Documento Solicitado</td>
			<TD style="text-align: center;">Status</TD>
			<td style="text-align: center;">Fecha de solicitud</td>
			<td style="text-align: center;">Fecha de Liberacion</td>



		</TR>
		<?php
			$sql2="SELECT folio_doc,status,fecha,fecha_liberacion,doc_sol FROM documentos WHERE num_control='$num_control'";
			$result2=mysqli_query($conexion,$sql2);		
	//		$json_array= array();

			while($mostrar2=mysqli_fetch_assoc($result2)){
				
		?>
		<tr>
			<td style="text-align: center;"><?php echo $mostrar2['folio_doc']?></td>
			<td style="text-align: center;"><?php echo $mostrar2['doc_sol']?></td>
			<td style="text-align: center;"><?php echo $mostrar2['status']?></td>
			<td style="text-align: center;"><?php echo $mostrar2['fecha']?></td>
			<td style="text-align: center;"> <?php echo $mostrar2['fecha_liberacion']; ?> </td>

				
		</tr>
		<?php
		//$json_array[]=$mostrar2;
		}
	//	echo json_encode($json_array);
		?>
	</table>

</body>
</html>