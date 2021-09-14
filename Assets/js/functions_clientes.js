
document.addEventListener('DOMContentLoaded', function(){
   
    if(document.querySelector("#formCliente")){
        let formCliente = document.querySelector("#formCliente");
        formCliente.onsubmit = function(e) {
        e.preventDefault();
        let strIdentificacion = document.querySelector('#txtIdentificacion').value;
        let strNombre = document.querySelector('#txtNombre').value;
        let strApellido = document.querySelector('#txtApellido').value;
        let strEmail = document.querySelector('#txtEmail').value;
        let intTelefono = document.querySelector('#txtTelefono').value;
        let strNit = document.querySelector('#txtNit').value;
        let strNomFiscal = document.querySelector('#txtNombreFiscal').value;
        let strDirFiscal = document.querySelector('#txtDirFiscal').value;
        let strPassword = document.querySelector('#txtPassword').value;
    

        if(strIdentificacion == '' || strApellido == '' || strNombre == '' || strEmail == '' || intTelefono == '' || strNit == ''|| strNomFiscal == ''|| strDirFiscal == '')
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }

        let elementsValid = document.getElementsByClassName("valid");
        for (let i = 0; i < elementsValid.length; i++) { 
            if(elementsValid[i].classList.contains('is-invalid')) { 
                swal("Atención", "Por favor verifique los campos en rojo." , "error");
                return false;
            } 
        } 
        divLoading.style.display = "flex";
        let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        let ajaxUrl = base_url+'/Clientes/setCliente'; 
        let formData = new FormData(formCliente);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                let objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    if(rowTable == ""){
                        tableUsuarios.api().ajax.reload();
                    }else{
                        htmlStatus = intStatus == 1 ? 
                        '<span class="badge badge-success">Activo</span>' : 
                        '<span class="badge badge-danger">Inactivo</span>';
                        rowTable.cells[1].textContent = strNombre;
                        rowTable.cells[2].textContent = strApellido;
                        rowTable.cells[3].textContent = strEmail;
                        rowTable.cells[4].textContent = intTelefono;
                        rowTable.cells[5].textContent = strNit;
                        rowTable.cells[5].textContent = strNomFiscal;
                        rowTable.cells[5].textContent = strDirFiscal;
                        rowTable="";
                    }
                    $('#modalFormCliente').modal("hide");
                    formCliente.reset();
                    swal("Usuarios", objData.msg ,"success");
                    //tableUsuarios.api().ajax.reload();
                }else{
                    swal("Error", objData.msg , "error");
                }
            }
            divLoading.style.display = "none";
            return false;
        }

        }
    }


 }, false);
function openModal()
{
    rowTable = "";
    document.querySelector('#idUsuario').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Cliente";
    document.querySelector("#formCliente").reset();
    $('#modalFormCliente').modal('show');
}