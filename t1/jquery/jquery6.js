

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

// https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js sirve para no tener que descargar 
//tr son las filas  even es para filas par y odd para los impares
//td las columnas y th las cabezeras

//para hacerlo con class pones tr:even .addClass("impares") y en html solo creas <style> .impares 
// sin poner la clase impares a ningun objeto del html 
//para quitar esa clase pon .removeClass