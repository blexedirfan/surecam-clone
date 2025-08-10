import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';


document.getElementById('navbar-toggler').addEventListener('click', function () {
    const menu = document.getElementById('navbar-menu');
    menu.classList.toggle('show'); // Toggle the 'show' class
});

