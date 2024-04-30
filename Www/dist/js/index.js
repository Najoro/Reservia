const goReserver = document.getElementById('goReserve');
const reserver = document.querySelector('.reservation');
const backReserver = document.querySelector('.back');
const hostingEachCard = document.querySelector('.hostingEachCard');
const footer = document.querySelector('.footerContenaire');


goReserver.addEventListener('click' , ()=> {
    reserver.classList.toggle('active-popup');
    hostingEachCard.classList.toggle("flou");
    footer.classList.toggle("flou");
})
backReserver.addEventListener('click', ()=> {
    reserver.classList.toggle('active-popup');
    hostingEachCard.classList.toggle("flou");
    footer.classList.toggle("flou");
})