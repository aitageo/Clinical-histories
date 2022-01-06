

let nombre = document.querySelector(".nombre");
let correo = document.querySelector(".correo");
let contraseña = document.getElementById("contraseña");

let enviar = document.getElementById('enviar');
enviar.addEventListener("click",function(e){
    if (correo.value === "") {
        alert('el campo correo es obligatorio')
        e.preventDefault();
        return false;
    }
    else if (contraseña.value === "") {
        alert('el campo contraseña es obligatorio')
        e.preventDefault();
        return false;
    }else {
        alert("ingreso exitoso");
         window.location.href='usuarios.html';
    }


});
