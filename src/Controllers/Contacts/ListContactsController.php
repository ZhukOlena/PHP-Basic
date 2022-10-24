<?php

namespace App\Controllers\Contacts;

use App\Controllers\ControllerInterface;
use App\Core\Orm\Connector;
use App\Core\ViewRenderer;

class ListContactsController implements ControllerInterface
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

        $stmt = $pdo->query('SELECT * FROM contacts ORDER BY created_at DESC');

        $contacts = [];

        while ($row = $stmt->fetch()) {
            $contacts[] = [
                'id' => $row['id'],
                'created_at' => new \DateTime($row['created_at']),
                'phone' => $row['phone'],
                'address' => $row['address'],
                'email' => $row ['email'],
            ];
        }

        $content = $this->viewRenderer->render('list-contacts', [
            'contacts' => $contacts
        ]);

        print $content;
    }

}