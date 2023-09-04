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






