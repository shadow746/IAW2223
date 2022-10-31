function dinero() {
   
    let a = parseFloat(document.getElementById("inputdinero").value);

if (a >= 0 ) {
    let b;

    b = ( a * 99) / 100;
    document.getElementById ("resultado").innerHTML = b;
}

else {document.getElementById ("resultado").innerHTML = "introduce una cantidad correcta/positiva "}
}

function dinero2() {
   
    let c = parseFloat(document.getElementById("inputdinero2").value);

if (c >= 0 ) {
    let d;

    d = ( c * 100) / 99;
    document.getElementById ("resultado2").innerHTML = d;
}

else {document.getElementById ("resultado2").innerHTML = "introduce una cantidad correcta/positiva "}
}
