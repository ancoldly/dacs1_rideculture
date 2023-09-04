const menu = document.querySelector('.nav');
const menuicon = document.querySelector('#menu-icon');

menuicon.onclick = function() {
  menuicon.classList.toggle('bx-x');
  menu.classList.toggle("active");
};