const password = document.querySelector('#senha')
const passwordRepeat = document.querySelector('#passwordRepeat');
const cadastro = document.querySelector('#cadastro');

cadastro.addEventListener('submit', (event) =>{
    if(passwordRepeat.value !== password.value){
        console.log("As senhas devem ser iguais !")
        event.preventDefault();
    }
})

