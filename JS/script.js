// 1. Mobile Navigation Toggle
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li');

burger.addEventListener('click', () => {
    // Toggle Nav
    nav.classList.toggle('nav-active');

    // Burger Animation (Berubah jadi X)
    burger.classList.toggle('toggle');
});

// 2. Sticky Navbar Effect saat Scroll
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    // Jika scroll lebih dari 20px, tambah class 'scrolled'
    if (window.scrollY > 20) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});