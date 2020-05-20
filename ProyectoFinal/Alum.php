<?php
include('conexion.php');
session_start();
$num_control=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Alumno</title>
<link rel="stylesheet" href="diseno/css/estilos.css">
<style>
body {
	background-image: url("FondoTec.png");
} 
</style>
</head>
<body>
<BUTTON class="btn btn-1" style=><a href="index2.php"> Cerrar sesion </a></BUTTON><br> 
<br>
<br>
<br>
<br>


<?php
			
			$sql="SELECT nombre_alumno,apellido_p,apellido_m,num_control FROM Alumno WHERE num_control='$num_control'";
			$result=mysqli_query($conexion,$sql);		
			while($mostrar=mysqli_fetch_array($result)){
		?>
			<br>
			
			<B> Bienvenido <?php echo $mostrar['nombre_alumno']?> <?php echo $mostrar['apellido_p']?> <?php echo $mostrar['apellido_m']?></B>
		<?php
		}
		?>




<div align="center">
		<table  align="center" width="430" cellspacing="2" cellpadding="2" border="0">
			<form action="recuperardatos.php" action="solicitudalumno.php "  method="post">
			<tr>
				<td class="color"><b class="texto"> No de Control:</b></td> <td > 
					<label size="30" maxlength="30"> <?php echo $num_control ?> </label>
				</td>
					<br>
			</tr>
			<tr>
	
				<td class="color"><b class="texto">Tipo de Tramite:</b> </td> <td> 
					<select name="tramite">
						<option value="1">Certificado de Estudios  $750</option>
   						<option value="2">Certificado de Estudios de Posgrado	$1000</option>
 					    <option value="3">Certificado Parcial	$750</option>
    					<option value="4">Duplicado de Certificado	$750</option>
    					<option value="5">Constancia	$50</option>
    					<option value="6">Kardex	$100</option>
   						<option value="7">Duplicado de Credencial	$150</option> 
		  			</select>
		  		</td>
		  			<br>
		 	</tr>
			<tr>
			</tr>
			<tr>
				<td class="color"><b class="texto">Tipo de pago:</b>	</td>
				<td> <input type="radio" name="bt1" value="Efectivo">Pago en Efectivo (OXXO,Ventanilla,Cajero) <br>
					 <input type="radio" name="bt1" value="Transferencia">Transferencia Bancaria (Visa,MasterCard,PayPal)
				</td>
			</tr>	
				<br>	

		</table>
				<br>
 					<input type="submit" name="pagar" value="SOLICITAR" class="btn btn-1" ></a>
			</form>	
			<br>
			<p><a href="solicitudalumno.php">haga clic aqui para ver las solicitudes realizadas </a></p>
	</div>





</body>
</html>