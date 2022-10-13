<?php

namespace App\Controllers;

class ErrorController Implements ControllerInterface
{
    public function handleAction()
    {
        print 'Error: page not found';
    }
}
