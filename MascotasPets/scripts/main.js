const fila= document.querySelector('.contenedor-carusel');
const mascotas = document.querySelector ('.mascota');

const izq= document.getElementById('izq');
const der = document.getElementById('der');

const fila1= document.querySelector('.contenedor-carusel1');
const slider = document.querySelector ('.mascotaslider');

const izqSlider= document.getElementById('izqSlider');
const derSlider = document.getElementById('derSlider');


der.addEventListener('click',() => {

    fila.scrollLeft += fila.offsetWidth;

});

izq.addEventListener('click',() => {

    fila.scrollLeft -= fila.offsetWidth;

});

derSlider.addEventListener('click',() => {

    fila1.scrollLeft += fila1.offsetWidth;

});

izqSlider.addEventListener('click',() => {

    fila1.scrollLeft -= fila1.offsetWidth;

});
