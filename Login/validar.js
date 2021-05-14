function validar(){
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

function validarinicio(){
    alert('hola mundo');
    return false;
};