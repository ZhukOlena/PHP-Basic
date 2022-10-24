<?php

namespace App\Controllers\Users;

use App\Controllers\ControllerInterface;
use App\Core\Orm\Connector;
use App\Core\ViewRenderer;

class ListUsersController implements ControllerInterface
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
        $pdo = $this->connector->getPdo();

        $stmt = $pdo->query('SELECT * FROM users ORDER BY age DESC');

        $users = [];

        while ($row = $stmt->fetch()) {
            $users [] = [
                'id' => $row ['id'],
                'created_at' => new \DateTime($row['created_at']),
                'first_name' => $row['first_name'],
                'age' => $row ['age'],
            ];
        }

        $content = $this->viewRenderer->render('list-users', ['users' => $users]);

        print $content;
    }
}
