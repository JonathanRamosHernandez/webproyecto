<?php
include ("conexion.php");
session_start();
$usuario=$_SESSION['usuario'];
$num_control= $_POST['num_control'];
$sql="UPDATE documentos SET status='Liberado',fecha_liberacion=NOW(),aprobacion='$usuario' WHERE folio_doc='$num_control'";
$result=mysqli_query($conexion,$sql);
?>