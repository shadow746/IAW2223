function alta() {
    // Get the value of the input field with id="numb"
    let x = document.getElementById("pin").value;
    // If x is Not a Number or less than one or greater than 10
    
    console.log(response);
    let passwd2=document.getElementById("pin2").value;
    let passwd=document.getElementById("pin").value;
    
    if (isNaN(passwd) )
    { 
      document.getElementById("resultado").innerHTML="no escribiste pin";
      
      }
      
    else if (isNaN(usuario)){document.getElementById("errorinsertar").innerHTML="contraseña incorrecta.";
    }
    
      else if (passwd2==passwd )
    {  
        document.getElementById("resultado").innerHTML = "pin correcto";
    }

}


