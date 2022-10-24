<?php

namespace App\Controllers\Users;

use App\Controllers\ControllerInterface;
use App\Core\Orm\Connector;
use App\Core\ViewRenderer;

class CreateUsersController implements ControllerInterface
{
    private ViewRenderer $viewRenderer;
    private Connector $connector;

    public function __construct(ViewRenderer $viewRenderer, Connector $connector)
    {
        $this->viewRenderer = $viewRenderer;
        $this->connector = $connector;
    }

    public function handleAction()
    {
        $created = false;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // INSERT INTO users (created_at, first_name, age) VALUES (NOW(), "Olena", 31)
            $sql = 'INSERT INTO users (created_at, first_name, age) VALUES (NOW(), "'.$_POST['first_name'].'", '.$_POST['age'].')';
            $pdo = $this->connector->getPdo();
            $pdo->exec($sql);

            $created = true;
        }

        $content = $this->viewRenderer->render('create-user', [
            'created' => $created,
        ]);

        print $content;
    }
}