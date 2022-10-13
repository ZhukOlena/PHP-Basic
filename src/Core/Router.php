<?php

namespace App\Core;

use App\Controllers\AdminController;
use App\Controllers\ControllerInterface;
use App\Controllers\ErrorController;
use App\Controllers\HomeController;
use App\Controllers\ListMessagesController;

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
        } else if ($requestUri == '/messages') {
            $controllerClass = ListMessagesController::class;
        }

        /** @var ControllerInterface $obj */
        $obj = new $controllerClass;

        $obj->handleAction();
    }
}
