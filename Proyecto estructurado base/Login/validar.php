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
        header("location:home.php");
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

<script>
function validarform(){
    if(!(/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+)+[\s]*([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*?$/.test(document.getElementById("usuario").value)))
        {
            alert('Hay un error en el nombre de usuario');
            document.getElementById("usuario").focus();
            return false;
        }else{ 
            if (!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.getElementById("correo").value)))
                {
                    alert('El correo debe tener formato nombre@dominio.com');
                    document.getElementById("correo").focus();
                    return false;
                }else{
                    if (document.getElementById("contraseña").value.length<8)
                        {
                            alert('La contraseña debe tener al menos 8 caracteres');
                            document.getElementById("contraseña").focus();
                            return false;
                        }else{
                            if(!(/(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ].*/.test(document.getElementById("contraseña").value)))
                                {
                                    alert('la contraseña debe tener al menos una mayúscula, una minúscula y un dígito');
                                    document.getElementById("contraseña").focus();
                                    return false;
                                }
                            }
                    }
            }
    return true;
};
</script>