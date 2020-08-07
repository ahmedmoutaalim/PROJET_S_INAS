// const option = document.getElementById("show");
// const liste = document.querySelector(".omar")

// option.addEventListener('click' ,()=>{

//     liste.classList.add('hide')
    

// });
console.log('hi');

const burger = document.querySelector('.burger');
const menu = document.querySelector('.menu')

burger.addEventListener('click', () =>{
    burger.classList.toggle('active');
    menu.classList.toggle('show');
});

