

$(document).ready(function () {
    
//vamos a modificar los estilos css
$("#btn-modificar").click(function (e) { 
    e.preventDefault();
    $(".roja").css({"color":"blue", "font-size":"200%"});

});
$("#btn-original").click(function (e) { 
    e.preventDefault();
    $(".roja").css({"color":"red", "font-size":"100%"});
    

});


});


// https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js sirve para no tener que descargar 
//cosas si el cliente ya los hizo en otro
