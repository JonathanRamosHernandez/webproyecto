<?php
require('conexion.php');
sleep(2);
$usu=$_POST['usuariolg'];
session_start();
$_SESSION['usuario']=$usu;
$pass=$_POST['passlg'];
$usuarios=$mysqli->query("Select nombres,tipo
                        From usuarios Where usuario='".$usu."'
                      AND password='".$pass."'");
if ($usuarios->num_rows>0):
  $datos= $usuarios->fetch_assoc();
    echo json_encode(array('error'=>false,'tipo'=>$datos['tipo']));
else:
    echo json_encode(array('error'=>true));
endif;
$mysqli->close();
 ?>
