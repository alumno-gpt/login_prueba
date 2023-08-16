<?php
namespace Controllers;

use MVC\Router;

class LoginController{
    public function index(Router $router){
        $router->reder('login/index', []);
        }
}
?>