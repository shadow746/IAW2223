

$(document).ready(function () {
    $("#btn-ocultar").click(function (e) { 
        e.preventDefault();
        $("#encabezado").hide();
        $("#p1").hide();
        $("#p2").hide();

    });
     $("#btn-mostrar").click(function (e) { 
            e.preventDefault();
            $("#encabezado").show();
            $("#p1").show();
            $("#p2").show();


});
});


