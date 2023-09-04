const player = new Plyr('#player', {captions: {active: true}});

window.player = player;

const menuselect = document.querySelector('.menu-select');
const select = document.querySelector('.select-newscontent');

menuselect.addEventListener('click', function() {
  select.classList.toggle('show');
});

window.addEventListener('click', function(event) {
  if (!event.target.matches('.menu-select')) {
    var dropdowns = document.getElementsByClassName("select-newscontent");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
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

var swiper = new Swiper(".mySwiper-news", {
    direction: "vertical",
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
}); 

const btnselect = select.querySelectorAll('li');
const newsslide = document.querySelectorAll('.news-slide');

var listslide = function(manual) {
  btnselect.forEach((btn) => {
    btn.classList.remove("active");
  });

  newsslide.forEach((news) => {
    news.classList.remove("active");
  });

  btnselect[manual].classList.add("active");
  newsslide[manual].classList.add("active");
}

btnselect.forEach((btn, i) => {
  btn.addEventListener("click",() => {
    listslide(i);
  });
});



for (var i = 0; i < btnselect.length; i++) {
  btnselect[i].addEventListener("click", function() {
    for (var j = 0; j < btnselect.length; j++) {
      if (btnselect[j].classList.contains("bgrli")) {
        btnselect[j].classList.remove("bgrli");
      }
    }
    this.classList.add("bgrli");
  });
}

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

ScrollReveal().reveal('.footer-menu', { origin: 'bottom' });
ScrollReveal().reveal('.title-news,.title-select,.title-banner,.title-banner-content h1,.title-index-banner', { origin: 'left' });
ScrollReveal().reveal('.text-news-banner,.title-video', { origin: 'top' });
ScrollReveal().reveal('.logo-banner-content', { origin: 'right' });

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