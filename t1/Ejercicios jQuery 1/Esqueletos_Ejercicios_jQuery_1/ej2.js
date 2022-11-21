/* Rellena este fichero */
$(document).ready(function () {
    $("#btn-ocultar").click(function (e) { 
        e.preventDefault();
        $(".pares").hide();
        

    });
     $("#btn-mostrar").click(function (e) { 
            e.preventDefault();
            $(".pares").show();
        

});
});
