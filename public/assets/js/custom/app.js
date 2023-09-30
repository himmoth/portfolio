
menuBtn = document.getElementById('menu');
navBar = document.getElementById('nav');
console.log(navBar)
menuBtn.addEventListener('click', ()=>{
    navBar.classList.toggle('active')
})

menuBtn.addEventListener('click', ()=>{
    let faBar= document.getElementsByClassName('fa-solid');
    faBar[0].classList.toggle('fa-xmark');
})

const url = "https://fakestoreapi.com/products";

async function getAllMeal() {
    let response = await fetch(url);
    let datas = await response.json();
    
    console.log(datas);

}

getAllMeal();