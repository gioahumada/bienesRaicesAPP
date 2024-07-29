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

    const prefiereDarkmode = window.matchMedia('(prefers-color-scheme: dark)');

    if(prefiereDarkmode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

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