<?php

namespace Controllers;

use Exception;

use MVC\Router;
use Model\ActiveRecord; 
use Model\Usuario;

class MenuController
{
    public static function index(Router $router)
    {
        $router->render('menu/index', []);
    }

  
  
}