let darkModeIcon = document.querySelector('#darkMode-icon');

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

var swiper = new Swiper(".mySwiper-shop-home", {
  loop:true,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Khởi tạo Swiper với số slide hiển thị ban đầu là 4
var swiper = new Swiper(".mySwiper-shop-hot", {
  slidesPerView: 4,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  }, 
});

// Hàm cập nhật số slide hiển thị của Swiper
function updateSlidesPerView() {
  var screenWidth = window.innerWidth;
  if (screenWidth <= 1200) {
    swiper.params.slidesPerView = 3;
  } else {
    swiper.params.slidesPerView = 4;
  }

  if (screenWidth <= 991) {
    swiper.params.slidesPerView = 3;
  }

  if (screenWidth <= 768) {
    swiper.params.slidesPerView = 2;
  }

  if (screenWidth <= 450) {
    swiper.params.slidesPerView = 1;
  }

  if(screenWidth <= 320) {
    swiper.params.spaceBetween = 10;
  }
  swiper.update();
}

// Gọi hàm updateSlidesPerView khi sự kiện resize được kích hoạt
window.addEventListener("resize", updateSlidesPerView);

// Gọi hàm updateSlidesPerView khi trang web được tải lần đầu tiên
updateSlidesPerView();





const cart = document.getElementById("cart");
const opencart = document.querySelector('.cart-shop');
const closecart = document.querySelector('.close-cart');
const html = document.querySelector('html');
const numberitem = document.querySelector('.number-item');
const numberitemcart = document.querySelector('.number-item-cart');
const numberitemcartheader = document.querySelector('.number-item-header');
const sumprice = document.querySelector('sum-price');

// Lấy thông tin sản phẩm từ localStorage
let cartItemsInLocalStorage = JSON.parse(localStorage.getItem('cartItems')) || [];

// Khởi tạo danh sách sản phẩm trên trang web
let cartItemsOnPage = [];

// Hiển thị sản phẩm trong giỏ hàng theo thứ tự ngược lại
const listCart = document.querySelector('.listCart');
for (let i = cartItemsInLocalStorage.length - 1; i >= 0; i--) {
  const item = cartItemsInLocalStorage[i];

  const itemNew = document.createElement('div');
  itemNew.setAttribute('class', 'item-shop');
  itemNew.setAttribute('data-key', item.key);
  itemNew.innerHTML = item.html;
  listCart.appendChild(itemNew);

  // Thêm sản phẩm vào danh sách sản phẩm trên trang web
  cartItemsOnPage.unshift(item);
}

// Cập nhật số lượng sản phẩm trong giỏ hàng
updateItemCount();
updatenumberheader();

window.addEventListener('load', function() {
  updateItemCount();
  UpdatePrice();
  updateNumberCart();
  updatenumberheader();
});

function updateNumberCart() {
  const numberProduct = document.querySelectorAll('.ipnumber');
numberProduct.forEach(input => {
  const cartItem = input.closest('.listCart .item-shop');
  if (!cartItem) {
    return;
  }
  const key = cartItem.getAttribute('data-key');
  const savedNumber = localStorage.getItem(key);

  if (savedNumber){
    input.value = savedNumber;
  }
  const number = input.value;
  localStorage.setItem(key, number);

  input.addEventListener('change', function() {
    const number = input.value;
    localStorage.setItem(key, number);
    UpdatePrice();
    updateItemCount();
  });
});
}

opencart.onclick = function() {
  const countcartitem = document.querySelectorAll('.listCart .item-shop').length;
  if (countcartitem > 0) {
    cart.classList.add('opencart');
    html.classList.add('noscl');
    updateNumberCart();
    UpdatePrice();
    updatenumberheader();
    updateItemCount();
  } else {
    cart.classList.remove('opencart');
    html.classList.remove('noscl');
  }
}

closecart.onclick = function() {
  cart.classList.remove('opencart');
  html.classList.remove('noscl');
  updateItemCount();
  updatenumberheader();
}

const listshop = document.querySelectorAll('.list-shop .item-shop');


function updateItemCount() {
  UpdatePrice();

  const numberProduct = document.querySelectorAll('.listCart .ipnumber');
  let total = 0;

  numberProduct.forEach(input => {
    const value = parseInt(input.value);
    if (!isNaN(value)) {
      total += value;
    }
  });

  // Update the number of products in the cart header
  const numberitem = document.querySelector('.number-item');
  const numberitemcart = document.querySelector('.number-item-cart');

  numberitem.innerHTML = total + " PRODUCT";
  numberitemcart.innerHTML = "Item(" + total + ") :";
}


function UpdatePrice() {
  const cartItems = document.querySelectorAll('.listCart .item-shop');

  // Duyệt qua từng sản phẩm trong giỏ hàng
  cartItems.forEach(item => {
    const key = item.getAttribute('data-key');
    const price = item.querySelector('.price').textContent;
    const numberProduct = item.querySelector('.ipnumber').value;
    const sumPriceElement = item.querySelector('.sum-price');
    const sumPriceElementx = item.querySelector('.sumx-price');

    // Tính toán tổng giá tiền của từng sản phẩm
    const sumPrice = price * numberProduct;
    sumPriceElement.innerHTML = "$" + price + " x " + numberProduct + " = ";
    sumPriceElementx.innerHTML = sumPrice.toFixed(2);
  });

  const cartItem = document.querySelectorAll('.listCart .item-shop');
  let total = 0;
  cartItem.forEach(items => {
    const totalItems = items.querySelector('.sumx-price').textContent;
    if(!isNaN(totalItems)) {
      total += parseFloat(totalItems);
    }
  });
  const numberprice = document.querySelector('.number-price');
  const totalprice = document.querySelector('.total-price');

  numberprice.innerHTML = total.toFixed(2);
  totalprice.innerHTML = total.toFixed(2);
}

function updatenumberheader() {
  let cartItems = document.querySelectorAll('.listCart .item-shop');
  let sumItemsCart = 0;

  cartItems.forEach(function(item) {
    const key = item.getAttribute('data-key');
    const savedNumber = localStorage.getItem(key);
    const parsedNumber = parseInt(savedNumber);

    if (!isNaN(parsedNumber)) {
      sumItemsCart += parsedNumber;
    }
  });

  numberitemcartheader.innerHTML = sumItemsCart;
}

listshop.forEach(item => {
  item.addEventListener('click', function(event) {
    if(event.target.classList.contains('add')) {

      var itemNew = item.cloneNode(true);

      let checkInsert = false;

      let listCart = document.querySelectorAll('.listCart .item-shop');

      listCart.forEach(cart => {
        if(cart.getAttribute('data-key') == itemNew.getAttribute('data-key')) {
          checkInsert = true;
          cart.classList.add('danger');
          setTimeout(function() {
            cart.classList.remove('danger');
          },500)
        }
      })

      if(checkInsert == false) {
        document.querySelector('.listCart').insertBefore(itemNew, document.querySelector('.listCart').firstChild);
        const newItem = {
          key: itemNew.getAttribute('data-key'),
          html: itemNew.innerHTML
        };
        cartItemsOnPage.push(newItem);

        // Lưu thông tin sản phẩm vào localStorage
        localStorage.setItem('cartItems', JSON.stringify(cartItemsOnPage));

        // Kiểm tra xem localstorage có chứa dữ liệu hay không
        if (localStorage.getItem('cartItems') === null) {
          // Xóa bộ nhớ cache của trình duyệt
          window.location.reload(true);
        }

        // Cập nhật số lượng sản phẩm trong giỏ hàng
        cart.classList.add('opencart');
        html.classList.add('noscl');
        
        updateNumberCart();
        updateItemCount();
        UpdatePrice();
        updatenumberheader();
      }
    } 
  });
});

const countcartitem = document.querySelectorAll('.listCart .item-shop').length;
function Remove(key) {
  // Xóa mục khỏi giỏ hàng trên trang web
  let listCart = document.querySelectorAll('.listCart .item-shop');
  listCart.forEach(item => {
    if (item.getAttribute('data-key') == key) {
      item.remove();

      // Cập nhật danh sách sản phẩm trên trang web
      cartItemsOnPage = cartItemsOnPage.filter((item) => item.key != key);

      localStorage.removeItem(key);

      // Cập nhật localStorage
      localStorage.setItem("cartItems", JSON.stringify(cartItemsOnPage));

      // Cập nhật số lượng sản phẩm trong giỏ hàng
      updatenumberheader();
      updateItemCount();
      UpdatePrice();
      updateNumberCart();

      // Kiểm tra nếu giỏ hàng trống thì đóng giỏ hàng
      if (cartItemsOnPage.length == 0) {
        cart.classList.remove('opencart');
        html.classList.remove('noscl');
        updatenumberheader();
      }
    }
  });
}



const btnSelect = document.querySelectorAll('.shop-item');
const newsSlide = document.querySelectorAll('.helmets-content');

// Hàm listSlide để chuyển đổi giữa các slide
const listSlide = (manual) => {
btnSelect.forEach((btn) => {
btn.classList.remove('active');
});

newsSlide.forEach((news) => {
news.classList.remove('active');
});

btnSelect[manual].classList.add('active');
newsSlide[manual].classList.add('active');
};

// Lặp qua tất cả các nút và thêm sự kiện click
btnSelect.forEach((btn, i) => {
btn.addEventListener('click', () => {
listSlide(i);
});
});



const btnSelectnext = document.querySelectorAll('.shop-item-next');
const newsSlidenext = document.querySelectorAll('.helmets-content-next');

// Hàm listSlide để chuyển đổi giữa các slide
const listSlidenext = (manual) => {
  btnSelectnext.forEach((btn) => {
btn.classList.remove('active');
});

newsSlidenext.forEach((news) => {
news.classList.remove('active');
});

btnSelectnext[manual].classList.add('active');
newsSlidenext[manual].classList.add('active');
};

// Lặp qua tất cả các nút và thêm sự kiện click
btnSelectnext.forEach((btn, i) => {
btn.addEventListener('click', () => {
listSlidenext(i);
});
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




const outshop = document.querySelector('.out-mess');
const listMess = document.querySelector('.chat-message'); 

outshop.onclick = function() {
  listMess.style.display = 'none';
}

const showmess = document.querySelector('.next-mess');

showmess.onclick = function() {
  listMess.style.display = 'block';
}

const sendchat = document.querySelector('.send-chat');

sendchat.onclick = function() {
  const inputuser = document.getElementById("input-user");
  const valueuser = inputuser.value;
  const textuser = document.querySelector('.text-user');
  const messuser = document.querySelector('.mess-user');
  const messadmnext = document.querySelector('.adm-1');
  
  messuser.style.opacity = '1';
  textuser.innerHTML = valueuser;

  inputuser.value = ''

  setTimeout(function() {
    messadmnext.style.opacity = '1';
  },2500)
}

ScrollReveal({ 
  reset: true,
  distance: '80px',
  duration : 2000,
  delay : 200,
});

ScrollReveal().reveal('.footer-menu', { origin: 'bottom' });
ScrollReveal().reveal('.title-trending,.title-helmets,.title-shop-content,.title-brands,.title-free', { origin: 'left' });
ScrollReveal().reveal('.title-trending', { origin: 'top' });
ScrollReveal().reveal('.', { origin: 'right' });


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