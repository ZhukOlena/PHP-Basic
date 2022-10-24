<?php

namespace App\Controllers;

use App\Core\Orm\Connector;
use App\Core\ViewRenderer;

class ListMessagesController implements ControllerInterface
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

        $stmt = $pdo->query('SELECT * FROM messages ORDER BY created_at DESC');

        $messages = [];

        while ($row = $stmt->fetch()) {
            $messages[] = [
                'id' => $row['id'],
                'created_at' => new \DateTime($row['created_at']),
                'from' => $row['from_name'],
                'message' => $row['message'],
            ];
        }

        $content = $this->viewRenderer->render('list-messages', [
            'messages' => $messages
        ]);

        print $content;
    }
}
