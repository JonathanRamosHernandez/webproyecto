<?php
require('conexion.php');

$usu=$_POST['usuariolg'];
session_start();
$_SESSION['usuario']=$usu;
$pass=$_POST['passlg'];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usu' AND password='$pass'";
    $query = $mysqli->query($sql);
if ($query->num_rows>0){

    echo "CORRECTO";
}else{
    echo "ERROR";
}
$mysqli->close();
 ?>
