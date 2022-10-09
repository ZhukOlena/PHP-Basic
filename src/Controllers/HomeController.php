<?php

namespace App\Controllers;

class HomeController
{
    public function handleAction()
    {
        include __DIR__.'/../Resources/views/home.php';
    }
}
