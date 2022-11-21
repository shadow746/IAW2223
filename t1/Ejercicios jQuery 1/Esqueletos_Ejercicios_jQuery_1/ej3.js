/* Rellena este fichero */



$(document).ready(function () {
    $("#btn-aumentar").click(function (e) { 
        e.preventDefault();
       
        $(".pares").css({"color":"green", "font-size":"200%" , 
        "font-family": "'Courier New', Courier, monospace" });

    });
     $("#btn-disminuir").click(function (e) { 
            e.preventDefault();
            $(".pares").css({"color":"black", "font-size":"100%"});
        

});
});
