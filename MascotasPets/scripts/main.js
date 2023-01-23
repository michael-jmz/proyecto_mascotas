const fila= document.querySelector('.contenedor-carusel');
const mascotas = document.querySelector ('.mascota');

const izq= document.getElementById('izq');
const der = document.getElementById('der');


der.addEventListener('click',() => {

    fila.scrollLeft += fila.offsetWidth;

});

izq.addEventListener('click',() => {

    fila.scrollLeft -= fila.offsetWidth;

});
