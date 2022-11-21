
// importante¡¡¡¡¡ el archivo jquery.js tiene que estar antes de los otros js 



//el clic del boton oculta todos los elementos del sitio web
// el * es para indicar 'todos los elementos'
// usando jqdocready con la extension descarda de jquery
//manera larga de decir al navegador que ejecute jquey cuando el docum este listo





$(document).ready(function () {
    $("#btn-ocultar").click(function (e) { 
        e.preventDefault();
        $("p").hide();
    });
     $("#btn-mostrar").click(function (e) { 
            e.preventDefault();
            $("p").show();
    


});
});


