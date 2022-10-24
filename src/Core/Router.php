<?php

namespace App\Core;

use App\Controllers\AdminController;
use App\Controllers\Contacts\CreateContactsController;
use App\Controllers\Contacts\ListContactsController;
use App\Controllers\ControllerInterface;
use App\Controllers\ErrorController;
use App\Controllers\HomeController;
use App\Controllers\ListMessagesController;
use App\Controllers\Users\CreateUsersController;
use App\Controllers\Users\ListUsersController;
use App\Controllers\Contacts\ListContactController;
use App\Core\Orm\Connector;

class Router
{
    public function run()
    {
        $config = include __DIR__.'/../Resources/config/config.php';

        $viewRenderer = new ViewRenderer(__DIR__.'/../Resources/views');
        $connector = new Connector($config['db_dsn'], $config['db_username'], $config['db_password']);

        $requestUri = $_SERVER['REQUEST_URI'];
        $controllerClass = ErrorController::class;

        if ($requestUri == '/') {
            $controllerClass = HomeController::class;
        } else if ($requestUri == '/admin') {
            $controllerClass = AdminController::class;
        } else if ($requestUri == '/messages') {
            $controllerClass = ListMessagesController::class;
        } else if ($requestUri === '/users') {
            $controllerClass = ListUsersController::class;
        } else if ($requestUri === '/users/create') {
            $controllerClass = CreateUsersController::class;
        } else if ($requestUri == '/contacts') {
            $controllerClass = ListContactsController::class;
        } else if ($requestUri =='/contacts/create') {
            $controllerClass = CreateContactsController::class;
        }

        /** @var ControllerInterface $obj */
        $obj = new $controllerClass($viewRenderer, $connector);

        $obj->handleAction();
    }
}
