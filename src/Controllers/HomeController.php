<?php

namespace App\Controllers;

use App\Core\ViewRenderer;

class HomeController implements ControllerInterface
{
    private ViewRenderer  $viewRenderer;

    public function __construct(ViewRenderer $viewRenderer)
    {
        $this->viewRenderer = $viewRenderer;
    }

    public function handleAction()
    {
        $content = $this->viewRenderer->render('home');

        print $content;
    }
}
