<?php
include ('conexion.php');


session_start();
//$num_control=$_SESSION['usuario'];

	$sql2="SELECT folio_doc,status,fecha,fecha_liberacion,doc_sol FROM documentos WHERE num_control='17690258' && status='Espera'";
			$result2=mysqli_query($conexion,$sql2);
			$json_array= array();

			while($mostrar2=mysqli_fetch_assoc($result2)){
						$json_array['datos'][]=$mostrar2;
		}
		echo json_encode($json_array);
?>
