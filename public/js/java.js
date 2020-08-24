



// });
// console.log('hi');

const burger = document.querySelector('.burger');
const menu = document.querySelector('.menu');


burger.addEventListener('click', () =>{
    burger.classList.toggle('active');
    menu.classList.toggle('show');
});

// ---------------------------line lift
const head = document.querySelector('.menu_list-parentlist');
const accueil = document.querySelector('.menu_list-accueil');
head.addEventListener('click', () => {
  head.classList.add("mystyle");
  accueil.classList.add("menu_list-inter");
})
//----------------confirmation password

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;