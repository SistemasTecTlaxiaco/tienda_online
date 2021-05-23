<?php
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION["usuario"]=$usuario;
    
    include("db.php");

    $consulta="SELECT*FROM clientes WHERE nombre='$usuario' and contraseña='$contraseña'";
    
    if(isset($_POST['crear'])){
        if(strlen($_POST['usuarioN']) >= 1 && strlen($_POST['correoN']) >= 1 && strlen($_POST['contraseñaN'])){
            $usuarioN =trim( $_POST['usuarioN']);
            $correoN=trim( $_POST['correoN']);
            $contraseñaN=trim( $_POST['contraseñaN']); 
            $sql = "INSERT INTO clientes (nombre, correo, contraseña) 
            VALUES ('$usuarioN','$correoN','$contraseñaN')";
            $resultado=mysqli_query($conexion,$sql);
        }       
    }
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);
    
    if($filas){
        require 'views/header.php';
         require 'views/main/index.php';
         require 'views/footer.php';
         //$this->view->render('errores/index');
    }else{
        ?>
        <?php
        include("login.php");
        ?>
         <script>
        /*if(!($consulta)){
            alert("Error de autenticacion verifica los campos");
        }*/
        </script>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>
