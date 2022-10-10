function mostrarResultado(){
    let x,altura;
    x = document.piramide.letra.value;
    altura = document.piramide.cantidad.value;
    let a2 = altura-1;
    let columna = 0;
    let resultado = document.getElementById("mostrarAqui");
    resultado.innerHTML = '';
        for (let i = 1; i <= altura; i++) {
            for (let j = altura - i; j >= 1; j--) {
                resultado.innerHTML += '&nbsp;&nbsp;';
            }
            for (let j = 1; j <= i; j++) {
                resultado.innerHTML += x;
            }
            resultado.innerHTML += '<br>';
        }

        for (let i = 0; i < a2; i++) {
                resultado.innerHTML += '&nbsp;&nbsp;';

            for (let j = 0; j < columna; j++) {
                resultado.innerHTML += '&nbsp;&nbsp;';

            }
            for (let j = 0; j < a2-i; j++) {
                resultado.innerHTML += x;

            }
            resultado.innerHTML += '<br>';
            columna++;
        }
}