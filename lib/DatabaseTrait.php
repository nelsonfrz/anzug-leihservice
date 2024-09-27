<?php

namespace lib;

use mysqli;

trait DatabaseTrait
{
    protected $conn;

    public function connect()
    {
        if (!$this->conn) {
            $this->conn = new mysqli("127.0.0.1", "root", "root", "db")
            or die("Connection failed to database: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
