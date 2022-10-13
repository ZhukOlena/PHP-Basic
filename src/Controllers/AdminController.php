<?php

namespace App\Controllers;

class AdminController implements ControllerInterface
{
    public function handleAction()
    {
        include __DIR__.'/../Resources/views/admin.php';
    }
}
