
function validarDatos() 
{
    let na,nn,valido,fi,fs;
    na= document.formulario.nAdultos.value;
    nn= document.formulario.nNinos.value;
    fi= document.formulario.fIngreso.value;
    fs= document.formulario.fSalida.value;
    
    valido=0;

        if (na=='')
        {
            alert("Es obligatorio ingresar la cantidad de adultos");
        }
            else if (na<=0) 
            {
                 alert("Tiene que ingresar una cantidad mayor a cero");
            }
                 else if(isNaN(na)|| (isNaN(nn)))
                 {
                    alert("Debe ingresar un valor númerico");    
                }
            else 
                valido=1;
                
    if (valido=1){
       /* document.getElementById('fechaI').innerHTML = fi;*/
 

        document.formulario.submit();
        document.formulario2.fechaI.value = "Fecha de Ingreso:"+fi;
        document.formulario2.fechaS.value = fs;
       
    }
}


