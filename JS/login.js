const mail = document.getElementById('mail');
        const pass = document.getElementById('pass');
        const form = document.getElementById('form');
        const parrafo = document.getElementById('warnings');

        form.addEventListener("submit", e=>{
        e.preventDefault();
        let warnings = "";
        let entrar = false;
        let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        
        parrafo.innerHTML = "";
        
        if(!regexEmail.test(mail.value)){
            warnings +=`Debe ser un correo valido <br>`
            entrar = true;
        }

        if(pass.value.length<6 || pass.value.length >20){
            warnings +=`la contraseña debe ser mayor a 6 caracteres y menor a 20 <br>`
            entrar = true;
        }


        
        if(entrar){
            parrafo.innerHTML = warnings;
        }else{
            e.currentTarget.submit();
        }

         
    });