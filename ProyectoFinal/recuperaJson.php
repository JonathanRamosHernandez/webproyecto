<?php
include ("conexion.php");

session_start();
//$num_control=$_SESSION['usuario'];
$tipo_doc=$_POST['tramite'];
$doc_sol="";
$monto=0;
//$tipo_pago=$_POST['bt1'];

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

	$sql="INSERT INTO documentos values('17690258','$doc_sol','Efectivo',$monto,'Espera',NOW(),NULL,0,'17690258')";
	$result=mysqli_query($conexion,$sql);
	echo json_encode("Inserted Data !!")
?>
