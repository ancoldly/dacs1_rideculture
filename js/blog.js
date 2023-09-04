const swiper = new Swiper(".mySwiper-blog", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
});

let darkModeIcon = document.querySelector('#darkMode-icon');
let dark = document.querySelector('.dark');
let light = document.querySelector('.light');

darkModeIcon.onclick = () => {
    darkModeIcon.classList.toggle('bx-sun');
    document.body.classList.toggle('dark-mode');
};

const menu = document.querySelector('.nav');
const menuicon = document.querySelector('#menu-icon');

menuicon.onclick = function() {
  menuicon.classList.toggle('bx-x');
  menu.classList.toggle("active");
};

const searchheader = document.querySelector('.search-header');
const opensearch= document.querySelector('.search__btn');
const exitsearch= document.querySelector('.bx.bx-x');

opensearch.addEventListener('click', function() {
  searchheader.classList.toggle('showsearch');
});

exitsearch.addEventListener('click', function() {
  searchheader.classList.toggle('showsearch');
});

window.addEventListener('scroll', function() {
  var element = document.querySelector('.next-top');
  var scrollPosition = window.scrollY; 
  if (scrollPosition > 1200) {
    element.style.display = 'block'; 
  } else {
    element.style.display = 'none';
  }
});



ScrollReveal({ 
  reset: true,
  distance: '80px',
  duration : 2000,
  delay : 200,
});

ScrollReveal().reveal('.card-bot,.footer-menu', { origin: 'bottom' });
ScrollReveal().reveal('.title-blog,.title-review,.left', { origin: 'left' });
ScrollReveal().reveal('.card-top', { origin: 'top' });
ScrollReveal().reveal('.right', { origin: 'right' });



const nextcall = document.querySelector('.next-call');
const cancel = document.querySelector('.cancel-top');
const socialtop = document.querySelector('.call-top');

nextcall.onclick = function() {
  socialtop.style.display = 'flex';
}

cancel.onclick = function() {
  socialtop.style.display = 'none';
}

window.onclick = function(event) {
  if (event.target == socialtop && socialtop.style.opacity !== '0') {
    socialtop.style.display = 'none';
  }
}