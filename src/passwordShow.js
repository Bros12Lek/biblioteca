const senha = document.querySelector('#senha');
const eyeClosed = document.querySelector('.seePass');

eyeClosed.addEventListener('click' , (event) =>{

    if(senha.type === "password"){
        senha.type = "text";
        eyeClosed.src = "https://img.icons8.com/material-sharp/24/visible.png";

    }else{
        eyeClosed.src = "https://img.icons8.com/small/16/closed-eye.png";
        senha.type = "password";

    }
})