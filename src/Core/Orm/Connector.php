<?php

namespace App\Core\Orm;

class Connector
{
    private string $dsn;
    private string $username;
    private string $password;

    public function __construct(string $dsn, string $username, string $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPdo(): \PDO
    {
        return new \PDO($this->dsn, $this->username, $this->password);
    }
}