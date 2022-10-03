<?php

namespace App\Core;

use App\Controllers\AdminController;
use App\Controllers\ErrorController;
use App\Controllers\HomeController;

class Router
{
    public function run()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $controllerClass = ErrorController::class;

        if ($requestUri == '/') {
            $controllerClass = HomeController::class;
        } else if ($requestUri == '/admin') {
            $controllerClass = AdminController::class;
        }

        $obj = new $controllerClass;

        $obj->handleAction();
    }
}
