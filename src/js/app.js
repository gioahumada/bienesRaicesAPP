document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    
    mobileMenu.addEventListener('click', navegacionResponsive);

    darkmode();
    
}

function darkmode() {
    const botonDarkmode = document.querySelector('.dark-mode-boton');

    botonDarkmode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}