const fila1= document.querySelector('.contenedor-carusel1');
const slider = document.querySelector ('.mascotaslider');

const izqSlider= document.getElementById('izqSlider');
const derSlider = document.getElementById('derSlider');

derSlider.addEventListener('click',() => {

    fila1.scrollLeft += fila1.offsetWidth;

});

izqSlider.addEventListener('click',() => {

    fila1.scrollLeft -= fila1.offsetWidth;

});
