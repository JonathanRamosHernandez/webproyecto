<?php
include ('conexion.php');


session_start();
//$num_control=$_SESSION['usuario'];

	$sql="SELECT nombre_alumno,apellido_p,apellido_m,num_control FROM Alumno WHERE num_control='17690258'";
			$result2=mysqli_query($conexion,$sql);
			$json_array= array();
	
			while($mostrar2=mysqli_fetch_assoc($result2)){
						$json_array['Datos'][]=$mostrar2;
				}
				echo json_encode($json_array);

?>
