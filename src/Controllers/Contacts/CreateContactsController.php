<?php

namespace App\Controllers\Contacts;

use App\Controllers\ControllerInterface;
use App\Core\Orm\Connector;
use App\Core\ViewRenderer;

class CreateContactsController implements ControllerInterface
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
            $sql = 'INSERT INTO contacts (created_at, phone, address, email) VALUES (NOW(), "'.$_POST['phone'].'", "'.$_POST['address'].'", "'.$_POST['email'].'")';

            $pdo = $this->connector->getPdo();
            $pdo->exec($sql);

            $created = true;
        }

        $content = $this->viewRenderer->render('create-contacts', [
            'created' => $created,
        ]);

        print $content;
    }
}