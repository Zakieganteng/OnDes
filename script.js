let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');
let signupFormBtn = document.querySelector('#signup-btn');
let signupForm = document.querySelector('.signup-form-container');
let formCloseSignup = document.querySelector('#form-close-signup');
let animationLine = document.getElementById('animation-line');
let loginFormContainer = document.querySelector('.login-form-container');
let signupFormContainer = document.querySelector('.signup-form-container');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
    signupForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

signupFormBtn.addEventListener('click', () =>{
    signupForm.classList.add('active');
}); 

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});

formCloseSignup.addEventListener('click', () => {
    signupForm.classList.remove('active');
});

videoBtn.forEach(btn => {
    btn.addEventListener('click', () =>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

ScrollReveal().reveal('.box-content', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 1000,     // Animation duration in milliseconds
    easing: 'ease-out',  // Animation easing function (optional)  
    reset: true,
});


$(function () {
$(document).scroll(function () {
    var $nav = $("#navbar");
    $nav.toggleClass('warna py-2 py-md-2 py-lg-0 py-xl-0', $(this).scrollTop() > $nav.height());
});
$(document).scroll(function () {
    var $nav = $("#navbar-detail");
    $nav.toggleClass('py-2 py-md-2 py-lg-0 py-xl-0 ', $(this).scrollTop() > $nav.height());
});


ScrollReveal().reveal('.holiday-left-reveal', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'left',      // Origin of the reveal ('top' to appear from the top)
    duration: 2000,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    interval: 500,
    reset: true,
});

ScrollReveal().reveal('.holiday-right-reveal', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'right',      // Origin of the reveal ('top' to appear from the top)
    duration: 4000,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    interval: 500,
    reset: true,
});

ScrollReveal().reveal('.reveals-1', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 2000,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    interval: 500,
});

ScrollReveal().reveal('.reveals-2', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 4000,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    interval: 500,
});

ScrollReveal().reveal('.reveals-3', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 6000,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    interval: 500,
});

ScrollReveal().reveal('.reveal-1', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 500,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    reset: true,
    interval: 500,
});

ScrollReveal().reveal('.reveal-2', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 1000,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    reset: true,
    interval: 500,
});

ScrollReveal().reveal('.reveal-3', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 1500,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    reset: true,
    interval: 500,
});

ScrollReveal().reveal('.reveal-4', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 2000,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    reset: true,
    interval: 500,
});

ScrollReveal().reveal('.reveal-5', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 2500,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    reset: true,
    interval: 500,
});

ScrollReveal().reveal('.reveal-6', {
    distance: '40px',   // Distance from which the element will appear
    origin: 'top',      // Origin of the reveal ('top' to appear from the top)
    duration: 3000,     // Animation duration in milliseconds
    easing: 'cubic-bezier(0.5, 0, 0, 1)',  // Animation easing function (optional)  
    reset: true,
    interval: 500,
});

});




