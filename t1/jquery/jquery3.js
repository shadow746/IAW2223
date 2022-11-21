

$(document).ready(function () {
    $("#btn-ocultar").click(function (e) { 
        e.preventDefault();
     
        $(".roja").hide();

    });
     $("#btn-mostrar").click(function (e) { 
            e.preventDefault();
            $(".roja").show();
  


});
});


// las clase tambien funcionan y los identificamos como .nombre