
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

const player = new Plyr('#player', {captions: {active: true}});

window.player = player;


var swiperhome = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

ScrollReveal({ 
  reset: true,
  distance: '80px',
  duration : 2000,
  delay : 200,
});

ScrollReveal().reveal('.title-shop,.title-news,.title-tour,.card-bot,.title-blog,.footer-menu', { origin: 'bottom' });
ScrollReveal().reveal('.text-slide-start,.text-tour,.title-shop-card,.title-banner', { origin: 'left' });
ScrollReveal().reveal('.infos-shop,.card-top', { origin: 'top' });
ScrollReveal().reveal('.tour-img', { origin: 'right' });


var swipernews = new Swiper(".mySwiper-news", {
  slidesPerView: 4,
  spaceBetween: 55,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swipershop = new Swiper(".mySwiper-shop-card", {
  slidesPerView: 4,
  spaceBetween: 55,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1440: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
    990: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 2,
    },
    560: {
      slidesPerView: 2,
    },
    450: {
      slidesPerView: 1,
    },
    0: {
      slidesPerView: 1,
    },
  },
});



function updateSlidesPerViewNews() {
  var screenWidth = window.innerWidth;
  if (screenWidth <= 1200) {
    swipernews.params.slidesPerView = 3;
  }
    else {
    swipernews.params.slidesPerView = 4;
  }

  if(screenWidth <= 991) {
    swipernews.params.slidesPerView = 2;
  }

  if(screenWidth <= 560) {
    swipernews.params.slidesPerView = 1;
  }

  swipernews.update();
}

// Gọi hàm updateSlidesPerView khi sự kiện resize được kích hoạt
window.addEventListener("resize", updateSlidesPerViewNews);

// Gọi hàm updateSlidesPerView khi trang web được tải lần đầu tiên
updateSlidesPerViewNews();



const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper-content-2", {
      loop: true,
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });

    const xam = document.querySelectorAll(".xam");
    const xanh = document.querySelectorAll(".xanh");
    const red = document.querySelectorAll(".red");
    const bgcard = document.querySelectorAll(".card-shop");
    
    

    function cardxam() {
      for (const bgcardx2 of bgcard) {
        bgcardx2.style.background = 'grey';
      }
    }

    function cardxanh() {
      for (const bgcardx2 of bgcard) {
        bgcardx2.style.background = '#5B85F9';
      }
    }

    function cardred() {
      for (const bgcardx2 of bgcard) {
        bgcardx2.style.background = 'firebrick';
      }
    }

    for (const xambtn of xam) {
      xambtn.addEventListener('click', cardxam)
    }

    for (const xanhbtn of xanh) {
      xanhbtn.addEventListener('click', cardxanh)
    }

    for (const redbtn of red) {
      redbtn.addEventListener('click', cardred)
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
