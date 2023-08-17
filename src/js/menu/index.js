const botonCerrarSesion = document.getElementById('CerrarSesion');

const cerrarSesion = () => {
    

    window.location.href = '/login_prueba/'; // Redirigir a la pagina de inicio de sesión
};

if (botonCerrarSesion) {
    botonCerrarSesion.addEventListener('click', cerrarSesion);
}

// Evitar que el usuario regrese a la pagina de inicio de sesion
window.history.pushState(null, null, window.location.href);
window.onpopstate = function(event) {
    window.history.go(1);
};