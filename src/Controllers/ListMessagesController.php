<?php

namespace App\Controllers;

class ListMessagesController implements ControllerInterface
{
    public function handleAction()
    {
        $messages = [
            [
                'from' => 'Vitalii',
                'title' => 'Hello',
                'message' => 'Hello, how are you'
            ],
            [
                'from' => 'Yuliya',
                'title' => 'Mirhaba',
                'message' => 'I\'m fine',
            ],
            [
                'from' => 'Vasya',
                'title' => 'How your learn?',
                'message' => 'So good, so far',
            ]
        ];

        include __DIR__.'/../Resources/views/list-messages.php';
    }
}
