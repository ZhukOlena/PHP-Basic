<?php

namespace App\Controllers;

class HomeController implements ControllerInterface
{
    public function handleAction()
    {
        include __DIR__.'/../Resources/views/home.php';
    }
}
