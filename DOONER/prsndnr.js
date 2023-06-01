const inputIcon = document.querySelector('.fa-regular')
const inputPassword = document.querySelector('.input_field')

inputIcon.addEventListener('click' ,() =>{
    inputIcon.classList.toggle('fa-eye-slash')
    inputIcon.classList.toggle('fa-eye')
    inputPassword.type = 
    inputPassword.type === 'password' ? 'text'  : 'password'
}


)

let navBar = document.querySelector('.navbar');
let darkMode =document.querySelector('#dark-mode-icon');
let body = document.body;
darkMode.addEventListener('click', ()=>{
    navBar.classList.toggle('dark-nav')
    body.classList.toggle('dark-mode');

}

);
