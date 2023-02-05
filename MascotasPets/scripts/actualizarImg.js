
function actualizarImg() {
    const $inputfile = document.querySelector("#selImg"),
        $imgProducto = document.querySelector("#image");
    // Escuchar cuando cambie
    $inputfile.addEventListener("change", () => {
        // Los archivos seleccionados, pueden ser muchos o uno
        const files = $inputfile.files;
        // Si no hay archivos salimos de la función y quitamos la imagen
        if (!files || !files.length) {
            $imgProducto.src = "";
            return;
        }
        // Ahora tomamos el primer archivo, el cual vamos a previsualizar
        const archivoInicial = files[0];
        // Lo convertimos a un objeto de tipo objectURL
        const Url = URL.createObjectURL(archivoInicial);
        // Y a la fuente de la imagen le ponemos el objectURL
        $imgProducto.src = Url;
    });
}
