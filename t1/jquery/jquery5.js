

$(document).ready(function () {
    
//vamos a modificar los estilos css
$("#btn-modificar").click(function (e) { 
    e.preventDefault();
        $("tr:even").css("background-color", "yellow");
      });

      //  $("tr:even").toggleClass("impares"); }); con eso te pone y quita si ya existe o no

$("#btn-modificar").click(function (e) { 
    // con .dblclick necesitarias hacer doble clic
    e.preventDefault();
    $("tr:odd").css("background-color", "red");
      });
      
$("#btn-original").click(function (e) { 
        e.preventDefault();
        $("tr").css("background-color", "white");
          });
    

});


// https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js sirve para no tener que descargar 
//tr son las filas  even es para filas par y odd para los impares
//td las columnas y th las cabezeras

//para hacerlo con class pones tr:even .addClass("impares") y en html solo creas <style> .impares 
// sin poner la clase impares a ningun objeto del html 
//para quitar esa clase pon .removeClass