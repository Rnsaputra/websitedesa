//tema
const body = document.querySelector('#bodys');
let background = document.querySelectorAll('#background');
const LokasiButton = document.querySelectorAll('#lokasi');
const modalPotensi = document.querySelectorAll('#modal');
const closeModalButton = document.querySelectorAll('#closeModal');


if (background.length === 3) {
    background[0].onclick = () => {
        body.classList.add('bg-image')
        body.classList.remove('bg-image2')
        body.classList.remove('bg-image3')
    }
    background[1].onclick = () => {
        body.classList.add('bg-image2')
        body.classList.remove('bg-image')
        body.classList.remove('bg-image3')
    }
    background[2].onclick = () => {
        body.classList.add('bg-image3')
        body.classList.remove('bg-image2')
        body.classList.remove('bg-image')
    }
    
}

const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const profil = document.querySelector('#profil');
const profilMenu = document.querySelector('#profil-menu');
const potensi = document.querySelector('#potensi');
const user = document.querySelector('#user');
const userMenu = document.querySelector('#user-menu');
const potensiMenu = document.querySelector('#potensi-menu');
const arrows = document.querySelectorAll('#arrow');
const profilFooter = document.querySelector('#profil-footer');
const profilMenuFooter = document.querySelector('#profil-menu-footer');
const potensiFooter = document.querySelector('#potensi-footer');
const potensiMenuFooter = document.querySelector('#potensi-menu-footer');

//navbar active

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".menu");
let current = "home";
let sectionTop = "";
let sectionHeight = "";




//navbar fixed
window.addEventListener('scroll', () => {
    var header = document.querySelector("header");
    navMenu.classList.add('hidden');
    profilMenu.classList.add('hidden');
    potensiMenu.classList.add('hidden');
    userMenu.classList.add('hidden');
    hamburger.classList.remove('hamburger-active');
    header.classList.toggle("navbar-fixed", window.scrollY);
    arrows[2].classList.add('arrow-rotate');
    arrows[0].classList.add('arrow-rotate');
    arrows[1].classList.add('arrow-rotate');
    for (let i = 0; i < LokasiButton.length; i++) {
        modalPotensi[i].classList.add('opacity-0');
        setTimeout(() => {
            modalPotensi[i].style.display = 'none';
        }, 500);

    }


    sections.forEach(section => {
        sectionTop = section.offsetTop;
        sectionHeight = section.clientHeight/3;
        if (window.scrollY >= sectionTop - sectionHeight ) {
            current = section.getAttribute("id");
        }
    });
    navLinks.forEach(link => {
        link.classList.remove("text-red-500");
        link.classList.remove("fill-red-500");
        link.classList.add("text-dark");
        link.classList.add("fill-dark");

        if (link.getAttribute("href") === `/#${current}` || link.getAttribute("id") === `${current}`) {
            link.classList.add("text-red-500");
            link.classList.remove("text-dark");
            link.classList.add("fill-red-500");
            link.classList.remove("text-dark");
        }
    });
});



//hamburger




profilFooter.addEventListener('click', function () {
    profilMenuFooter.classList.toggle('hidden');
    
    arrows[2].classList.toggle('arrow-rotate');
    arrows[3].classList.add('arrow-rotate');
});

potensiFooter.addEventListener('click', function () {
    
    profilMenuFooter.classList.add('hidden');
    arrows[2].classList.add('arrow-rotate');
    arrows[3].classList.toggle('arrow-rotate');
});

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
    profilMenu.classList.add('hidden');
    
});

profil.addEventListener('click', function () {
    profilMenu.classList.toggle('hidden');
    ;
    userMenu.classList.add('hidden');
    arrows[0].classList.toggle('arrow-rotate');
    arrows[1].classList.add('arrow-rotate');
    arrows[2].classList.add('arrow-rotate');

});

potensi.addEventListener('click', function () {

    profilMenu.classList.add('hidden');
    userMenu.classList.add('hidden');
    arrows[2].classList.add('arrow-rotate');
    arrows[1].classList.toggle('arrow-rotate');
    arrows[0].classList.add('arrow-rotate');
});

user.addEventListener('click', function () {
    userMenu.classList.toggle('hidden');
    profilMenu.classList.add('hidden');
    arrows[2].classList.toggle('arrow-rotate');
    arrows[1].classList.add('arrow-rotate');
    arrows[0].classList.add('arrow-rotate');
});

// modal


for (let o = 0; o < LokasiButton.length; o++) {
    LokasiButton[o].addEventListener('click', () => {
        modalPotensi[o].style.display = 'flex';
        setTimeout(() => {
            modalPotensi[o].classList.remove('opacity-0');
        }, 10);
    });

    closeModalButton[o].onclick = function () {
        modalPotensi[o].classList.add('opacity-0');
        setTimeout(() => {
            modalPotensi[o].style.display = 'none';
        }, 50);

    }
    window.onclick = function (event) {
        for (let y = 0; y < modalPotensi.length; y++) {
            if (event.target === modalPotensi[y]) {
                closeModalButton[y].onclick();
            }
        }
    }


};
