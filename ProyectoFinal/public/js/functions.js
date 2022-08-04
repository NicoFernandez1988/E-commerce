
var contador = 0;

const valor = document.querySelector('#contador');
const botones = document.querySelectorAll('.boton');

botones.forEach(boton=>{
    boton.addEventListener('click', function(e){

        const estilos = e.currentTarget.classList;

        if(estilos.contains('agregar')){
            contador++;
        }
        valor.textContent = contador;
    })
})
