<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
<link rel="stylesheet" href="public/css/default.css"> 
<link rel="stylesheet" href="public/css/estilos.css">

</head>
<body>  
<div class="container">
    <br><br><br><br>
    </div>
  <!-- partial:index.partial.html -->
  <div class="form">
      <div class="container">
       <div class="info">
         <h1>INICIAR SESION</h1>
       </div>
      </div>
       <div class="thumbnail"><img src="public/images/logo.png" /></div>
      <form class="register-form" action="" method="post">
      <input type="text" placeholder="Nombre de usuario" name="usuarioN" id="usuarioN"/>
      <input type="text" placeholder="correo@ejemplo.com" name="correoN" id="correoN"/> 
      <input type="password" placeholder="Contraseña" name="contraseñaN" id="contraseñaN"/>
      <button type="submit" name="crear" onclick="validarform()">CREAR</button>
      <p class="message">¿Ya tienes cuenta? <a href="#">Iniciar sesión</a></p>

    </form>
    <form class="login-form" action="public/validar.php" method="post" name="formlogin" id="formlogin">
      <input type="text" placeholder="Nombre de usuario" name="usuario" id="usuario" />
      <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña"/>
      <button type="submit" name="entrar" >INICIAR</button>
      <p class="message">¿No tienes una cuenta? <a href="#">Crear cuenta</a></p>
     
    </form>
  </div>
    <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="public/js/script.js"></script>
  <script src="public/js/validarform.js"></script>

</body>
</html>