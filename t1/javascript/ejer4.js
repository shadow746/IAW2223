function imc() {
   
    let altur = parseFloat(document.getElementById("estatura").value);
    let pes = parseFloat(document.getElementById("peso").value);
if (altur && pes >= 0 ) {
    let altura2 = altur * altur;

    let imc = pes / altura2;

    if(imc < 18.5){
        document.getElementById ("resultado").innerHTML = imc + " toca comer mas puchero";
    }    
    else if (imc < 24.9) {
        document.getElementById ("resultado").innerHTML = imc + " estas bien";
    }

    else if (imc < 29.9){
        document.getElementById ("resultado").innerHTML = imc + " un poco obeso";
    }

 
    else  {
        document.getElementById ("resultado").innerHTML = imc + " hay que adelgazar no?";
    }
}

else {document.getElementById ("resultado").innerHTML = " introduce un peso y altura correcto"}
}
