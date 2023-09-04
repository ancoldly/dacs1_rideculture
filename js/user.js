// const chooseAvatarBtn = document.getElementById('choose-avatar-btn');
// const avatarInput = document.getElementById('avatar');
// const avatarPreview = document.getElementById('avatar-preview');

// chooseAvatarBtn.addEventListener('click', () => {
//   avatarInput.click();
// });

// avatarInput.addEventListener('change', () => {
//   const file = avatarInput.files[0];
//   const imageUrl = URL.createObjectURL(file);
//   avatarPreview.src = imageUrl;
//   avatarPreview.style.display = 'block';
// });

const editBtn = document.querySelector('.edit-date');
const dateInput = document.querySelector('.date');
const dateTempInput = document.querySelector('.date-temp');

editBtn.onclick = function() {
  dateTempInput.style.display = 'block';
  dateInput.removeAttribute('readonly');
};

dateTempInput.addEventListener('change', ChangeDate);

function ChangeDate() {
  const dateValue = dateTempInput.value;
  dateInput.value = dateValue;
}

const editIcon = document.querySelector('.edit-name');
const nameInput = document.querySelector('.name-user-next');

const editAddress = document.querySelector('.edit-address');
const addressInput = document.querySelector('.address-user-next');

editAddress.onclick = function() {
  addressInput.removeAttribute('readonly');
  addressInput.style.color = 'firebrick';
}

editIcon.onclick = function() {
  nameInput.removeAttribute('readonly');
  nameInput.style.color = 'firebrick';
}


const genderSelect = document.getElementById('gender');
const genderInput = document.querySelector('.gender');

genderSelect.addEventListener('change', function() {
  genderInput.value = genderSelect.options[genderSelect.selectedIndex].text;
});


const logoutButton = document.querySelector('.btn-logout');

logoutButton.addEventListener('click', function() {
  // Gửi yêu cầu POST để xóa dữ liệu trong bảng temporary
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'logout.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onload = function() {
    window.location.href = "../html/login.php";
  };
  xhr.send('logout=true');
});




const btnselect = document.querySelectorAll('.select-info');
const slide = document.querySelectorAll('.user-next');

var listslide = function(manual) {
  btnselect.forEach((btn) => {
    btn.classList.remove("active");
  });

  slide.forEach((news) => {
    news.classList.remove("active");
  });

  btnselect[manual].classList.add("active");
  slide[manual].classList.add("active");
}

btnselect.forEach((btn, i) => {
  btn.addEventListener("click",() => {
    console.log(i);
    listslide(i);
  });
});