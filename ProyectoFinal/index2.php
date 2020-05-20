<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cabin&display=swap" rel="stylesheet">
<link rel="stylesheet" href="diseno/css/estilos.css">
<style>
body {
  background-image: url("FondoTec.png");
} 
</style>
  </head>
  <body>

    <div align="center" class="main">
        <br>
        <br>
        <br>
        <br>
      <table  align="center" width="430" cellspacing="2" cellpadding="2" border="0">
         <form action="" id="formLg">

          <tr>
          <td class="color"><b class="texto"> Usuario:</b></td>
          <td> <input type="text" name="usuariolg"  placeholder="Usuario" required> </td> 
          </tr>
          <tr>
          <td class="color"><b class="texto">Contraseña:</b> </td> 
          <td><input type="password" name="passlg"  placeholder="Contraseña" required></td>
          </tr>
        </table>
          <br>   
              <input type="submit" class="btn btn-1"   value="Iniciar Sesion" >
         </form>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
