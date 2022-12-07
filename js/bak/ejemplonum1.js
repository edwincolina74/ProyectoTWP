function submitForm(event){
    //Evita que se lleve a cabo la acción predeterminada del evento
    event.preventDefault();

    //Extrae el código del ingresado en el input
    var codigo = document.getElementById("codigo").value;
            
    /* Verifica si hay 4 dígitos */
    if(codigo.length == 4){
    /* Verifica Estado Civil */
        switch(parseInt(codigo.substr(0, 1))){
        case 1:
        document.getElementById("estadocivil").innerHTML = "Soltero";
        break;
        case 2:
        document.getElementById("estadocivil").innerHTML = "Casado";
        break;
        case 3:
        document.getElementById("estadocivil").innerHTML = "Viudo";
        break;
        case 4:
        document.getElementById("estadocivil").innerHTML = "Divorciado";
        break;
        default:
        document.getElementById("estadocivil").innerHTML = "Desconocido";
        }

        /* Verifica la Edad */
        document.getElementById("edad").innerHTML = codigo.substr(1, 2);

        /* Verifica el Sexo */
        if(parseInt(codigo.substr(0, 1))%2 == 0){
        document.getElementById("sexo").innerHTML = "Femenino";
        }else{
        document.getElementById("sexo").innerHTML = "Masculino";
        }

        return false;
        }else{
        alert("El código ingresado debe tener 4 dígitos.");
        return false;
         }
        }

        function Limpiar(){
            document.getElementById("codigo").value="";
            document.getElementById("estadocivil").innerHTML = "";
            document.getElementById("edad").innerHTML = "";
            document.getElementById("sexo").innerHTML = "";

            document.getElementById("codigo").focus();
}



