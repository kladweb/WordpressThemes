'use strict';

const backdrop = document.querySelector('.backdrop');
const modal = document.querySelector('.modal');
const modalNoButtons = document.querySelectorAll('.modal button');
const selectContactButton = document.querySelectorAll('.main-nav__button');
const iconMenu = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.main-nav__items');

const modalBuy = document.querySelector('.modal2');
const modalBuyCloseButton = document.querySelector('.modal2 button');
const modalBuyCloseLink = document.querySelector('.modal2__close');

// modal Window
for (let i = 0; i < selectContactButton.length; i++) {
  selectContactButton[i].addEventListener('click', function () {
    modal.classList.add('open');
    document.body.classList.add('_lock');
    backdrop.classList.add('open');
  })
}

for (let i = 0; i < modalNoButtons.length; i++) {
  if (modalNoButtons[i]) {
    modalNoButtons[i].addEventListener('click', closeModal);
  }
}

function closeModal() {
  if (modal) {
    modal.classList.remove('open');
  }
  backdrop.classList.remove('open');
  document.body.classList.remove('_lock');
  if (menuBody) {
    menuBody.classList.remove('open');
    iconMenu.classList.remove('_active');
  }
}

// menu_icon (burger)
if (menuBody) {
  iconMenu.addEventListener('click', function () {
    iconMenu.classList.toggle('_active');
    menuBody.classList.toggle('open');
  })
}


// Modal Buy site
function closeModal2() {
  if (modalBuy) {
    modalBuy.classList.remove('open');
  }
  backdrop.classList.remove('open');
  document.body.classList.remove('_lock');
  if (menuBody) {
    menuBody.classList.remove('open');
    iconMenu.classList.remove('_active');
  }
}


function openModal() {
  console.log('Load AAA');
  backdrop.classList.add('open');
  document.body.classList.add('_lock');
  modalBuy.classList.add('open');
}

function startOpenModal() {
  setTimeout(openModal, 61000);
}

modalBuyCloseButton.addEventListener('click', closeModal2);
modalBuyCloseLink.addEventListener('click', closeModal2);

window.addEventListener('load', startOpenModal);