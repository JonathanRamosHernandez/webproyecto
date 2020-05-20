<?php
include ('conexion.php');


	$sql2="SELECT * FROM usuarios";
			$result2=mysqli_query($conexion,$sql2);		
			$json_array= array();

			while($mostrar2=mysqli_fetch_assoc($result2)){
						$json_array[]=$mostrar2;
		}
		echo json_encode($json_array);
?>