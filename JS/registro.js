const mail = document.getElementById('mail');
    const pass = document.getElementById('pass');
    const name = document.getElementById('name');
    const lname = document.getElementById('lname');
    const addres = document.getElementById('addres');
    const phone = document.getElementById('phone');
    const form = document.getElementById('form');
    const rcc = document.getElementById('rcc');
    const parrafo = document.getElementById('warnings');

    form.addEventListener("submit", e=>{
        e.preventDefault();
        let warnings = "";
        let entrar = false;
        let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        
        parrafo.innerHTML = "";
        
        if(!regexEmail.test(mail.value)){
            warnings +=`Verifica el correo, este debe ser un correo valido <br>`
            entrar = true;
        }

        if(pass.value.length<6 || pass.value.length >20){
            warnings +=`Necesitas una contraseña con mas de 6 caracteres y menos de 20 <br>`
            entrar = true;
        }

        if(name.value.length<3 || name.value.length >25){
            warnings +=`tu(s) nombre(s) deben ser de mas de 3 caracteres y menos de 25 <br>`
            entrar = true;
        }

        if(lname.value.length<4 || lname.value.length >30){
            warnings +=`tus apellido deben ser de mas de 4 caracteres y menos de 30 <br>`
            entrar = true;
        }

        if(addres.value.length<20 || addres.value.length >60){
            warnings +=`tu dirección deber ser de mas de 20 caracteres y menos de 60 <br>`
            entrar = true;
        }
/*
        if(rcc.value.length == null){
            warnings +=`tu dirección deber ser de mas de 20 caracteres y menos de 60 <br>`
            entrar = true;
        }*/



        if(entrar){
            parrafo.innerHTML = warnings;
        }else{
            e.currentTarget.submit();
        }

    
    });