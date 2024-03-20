import './bootstrap';

// resources/js/app.js

document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.querySelector('nav');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 0) {
            navbar.classList.add('bg-white', 'border-gray-200');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-white', 'border-gray-200');
        }
    });
});
