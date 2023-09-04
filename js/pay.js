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

updateNumberCart();
UpdatePrice();
ApCode();
updateItemCount();

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
  const numberitemcart = document.querySelector('.number-item-cart');

  numberitemcart.innerHTML = "Item(" + total + ") :";
}


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
    ApCode();
  });
});
}

const btncode = document.querySelector('.btn-code');
const code = document.querySelector('.code');

btncode.onclick = function() {
  code.classList.toggle('show');
}


var checkboxes = document.getElementsByName('option');

  for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener('click', function() {
      if (this.checked) {
        for (var j = 0; j < checkboxes.length; j++) {
          if (checkboxes[j] !== this) {
            checkboxes[j].checked = false;
          }
        }
      }
    });
  }

  function ApCode() {
const totalprice = document.querySelector('.total-price');
let totalPriceValue = parseFloat(totalprice.textContent);
const initialPrice = totalPriceValue;
let savePrice = totalPriceValue;
var checkboxes = document.getElementsByName('option');

checkboxes.forEach(function(checkbox) {
  const dataKey = checkbox.getAttribute('data-key');
  if (initialPrice < 200) {
    checkbox.disabled = true;
    checkbox.checked = false;
  } else if (initialPrice >= 200 && initialPrice < 400) {
    if (dataKey === "501") {
      checkbox.disabled = false;
    } else {
      checkbox.disabled = true;
      checkbox.checked = false;
    }
  } else if (initialPrice >= 400) {
    if (dataKey === "501" || dataKey === "502") {
      checkbox.disabled = false;
    } else {
      checkbox.disabled = true;
      checkbox.checked = false;
    }
  } else {
    checkbox.disabled = true;
    checkbox.checked = false;
  }
}); 

checkboxes.forEach(function(checkbox) {
  checkbox.addEventListener('change', function() {
    if (this.checked) {
      const dataKey = this.getAttribute('data-key');
      if (dataKey === "501" && initialPrice >= 200 && this.checked) {
        totalPriceValue = initialPrice * 0.9; // giảm giá 10%
        totalprice.innerHTML = totalPriceValue.toFixed(2);
      } else if (dataKey === "502" && initialPrice >= 400 && this.checked) {
        totalPriceValue = initialPrice * 0.85; // giảm giá 15%
        totalprice.innerHTML = totalPriceValue.toFixed(2);
      } else {
        const discount = initialPrice - savePrice; // giá trị giảm giá của mã "501" hoặc "502"
        totalPriceValue = initialPrice - discount; // tính lại giá trị giảm giá
        totalprice.innerHTML = totalPriceValue.toFixed(2);
      }
      savePrice = totalPriceValue; // lưu giá trị giảm giá của mã mới được chọn
    } else {
      totalPriceValue = initialPrice; // Khôi phục giá trị ban đầu
      totalprice.innerHTML = totalPriceValue.toFixed(2);
      savePrice = totalPriceValue; // lưu giá trị ban đầu
    }
  });
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

  