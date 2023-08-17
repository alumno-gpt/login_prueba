<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;
use Controllers\LoginController;

class MenuController
{
    public static function index(Router $router)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Verificar si el usuario ha iniciado sesión
        if (isset($_SESSION['auth_user'])) {
            $catalogo = $_SESSION['auth_user'];
            // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
            header("Location: /proyecto2_login/");
            exit(); // Detener la ejecución de la página actual
        }

        // Si el usuario ha iniciado sesión, cargar la página del menú
        $router->render('menu/index', []);
    }
}

