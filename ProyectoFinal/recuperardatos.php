<?php
include ("conexion.php");

session_start();
$num_control=$_SESSION['usuario'];
$tipo_doc=$_POST['tramite'];
$doc_sol="";
$monto=0;
$tipo_pago=$_POST['bt1'];

switch ($tipo_doc) {
	case '1':
		$doc_sol="Certificado de estudios";
		$monto=750;
		break;
	case '2':
		$doc_sol="Certificado de estudios de postgrado";
		$monto=1000;
		break;
	case '3':
		$doc_sol="Certificado parcial";
		$monto=750;
		break;
	case '4':
		$doc_sol="Duplicado de Certificado";
		$monto=750;
		break;
	case '5':
		$doc_sol="Constancia";
		$monto=50;
		break;
	case '6':
		$doc_sol="Kardex";
		$monto=100;
		break;
	case '7':
		$doc_sol="Duplicado de Credencial";
		$monto=150;
		break;
							
	default:
	echo "no seleccionado";
		break;
}
	

	
	$sql="INSERT INTO documentos values('$num_control','$doc_sol','$tipo_pago',$monto,'Espera',NOW(),NULL,0,$num_control)";
	$result=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cabin&display=swap" rel="stylesheet">
<link rel="stylesheet" href="diseno/css/estilos.css">
<style>
body {
	background-image: url("FondoTec.png");
} 
</style>	
</head>
<body>
<b class="text">Solicitud realizada con exito </b>
<button class="btn btn-1"><a href="alum.php"><b class="tex">Regresar</b> <a>  </button> 
</body>
</html>