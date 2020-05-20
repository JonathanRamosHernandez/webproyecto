<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ALL RF</title>
</head>
<body>
	<?php
	$sum=0;
	?>
	<br>
	<table border="2" align="center" style="width:100%">
		<TR>
			<TD style="text-align: center;"><b>Documento Solicitado</b></TD>
			<td style="text-align: center;"><b>Cantidad</b> </td>


		</TR>
		<?php
			$sql="SELECT doc_sol, count(doc_sol) from documentos GROUP BY doc_sol";

			$result=mysqli_query($conexion,$sql);		

			while($mostrar=mysqli_fetch_array($result)){
		?>
		<tr>
			<td style="text-align: center;"><b><?php echo $mostrar['doc_sol']; ?></b></td>
			<td style="text-align: center;"><b><?php echo $mostrar['count(doc_sol)'] ?></b></td>
			<?php $sum+=$mostrar['count(doc_sol)']; ?>
		</tr>
		<?php
		}
		?>

	<tr></tr>
		<tr></tr>
	<td style="text-align: center;"><b>Total</td>
			<td style="text-align: center;"><b><?php echo $sum ?></b></td>

				</table>
</body>
</html>